<?php

require_once(DIR_SYSTEM . 'Mobile_Detect.php');
require_once(DIR_SYSTEM . 'library/minify/src/Minify.php');
require_once(DIR_SYSTEM . 'library/minify/src/JS.php');
require_once(DIR_SYSTEM . 'library/minify/src/CSS.php');
require_once(DIR_SYSTEM . 'library/minify/src/Exception.php');
require_once(DIR_SYSTEM . 'library/minify/src/Exceptions/BasicException.php');
require_once(DIR_SYSTEM . 'library/minify/src/Exceptions/IOException.php');
require_once(DIR_SYSTEM . 'library/minify/src/Exceptions/FileImportException.php');
require_once(DIR_SYSTEM . 'library/path-converter/src/ConverterInterface.php');
require_once(DIR_SYSTEM . 'library/path-converter/src/Converter.php');
require_once(DIR_SYSTEM . 'library/path-converter/src/NoConverter.php');

use MatthiasMullie\Minify\JS;
use MatthiasMullie\Minify\CSS;
            
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		
				$search_status = $this->config->get('module_ptsearch_status');
				if($search_status) {
					$data['search'] = $this->load->controller('extension/module/ptsearch');
					$data['search_status'] = true;
				} else {
					$data['search'] = $this->load->controller('common/search');
					$data['search_status'] = false;
				}
			
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

				// Add class page in body tag
				if (isset($this->request->get['route'])) {
					if (isset($this->request->get['product_id'])) {
						$class = '-' . $this->request->get['product_id'];
					} elseif (isset($this->request->get['path'])) {
						$class = '-' . $this->request->get['path'];
					} elseif (isset($this->request->get['manufacturer_id'])) {
						$class = '-' . $this->request->get['manufacturer_id'];
					} elseif (isset($this->request->get['information_id'])) {
						$class = '-' . $this->request->get['information_id'];
					} else {
						$class = '';
					}

					$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
				} else {
					$data['class'] = 'common-home';
				}
				// End Add class page in body tag
			

				// Plaza Module Postion
					$data['position1'] = $this->load->controller('common/position1');
					$data['position2'] = $this->load->controller('common/position2');
					$data['position3'] = $this->load->controller('common/position3');
					$data['position4'] = $this->load->controller('common/position4');
					$data['position5'] = $this->load->controller('common/position5');
					$data['position6'] = $this->load->controller('common/position6');
					$data['position7'] = $this->load->controller('common/position7');
					$data['position8'] = $this->load->controller('common/position8');
					$data['position9'] = $this->load->controller('common/position9');
					$data['position10'] = $this->load->controller('common/position10');
				// End Plaza Module Postion
			

                $data['header'] = $this->load->controller('plaza/header');
            


        $data['store_id'] = $this->config->get('config_store_id');
		$data['email'] = $this->config->get('config_email');
        /* General */
		if(isset($this->config->get('module_ptcontrolpanel_header_layout')[$data['store_id']])) {
            $data['header_layout'] = (int) $this->config->get('module_ptcontrolpanel_header_layout')[$data['store_id']];
        } else {
            $data['header_layout'] = 1;
        }
		
        /* Sticky Header */
        if(isset($this->config->get('module_ptcontrolpanel_sticky_header')[$data['store_id']])) {
            $data['sticky_header'] = (int) $this->config->get('module_ptcontrolpanel_sticky_header')[$data['store_id']];
        } else {
            $data['sticky_header'] = 0;
        }

        /* Scroll Top */
        if(isset($this->config->get('module_ptcontrolpanel_scroll_top')[$data['store_id']])) {
            $data['scroll_top'] = (int) $this->config->get('module_ptcontrolpanel_scroll_top')[$data['store_id']];
        } else {
            $data['scroll_top'] = 0;
        }

        /* Lazy Load */
        if(isset($this->config->get('module_ptcontrolpanel_lazy_load')[$data['store_id']])) {
            $data['lazy_load'] = (int) $this->config->get('module_ptcontrolpanel_lazy_load')[$data['store_id']];
        } else {
            $data['lazy_load'] = 0;
        }

        /* Minify Javascript */
        if(isset($this->config->get('module_ptcontrolpanel_minify_js')[$data['store_id']])) {
            $data['minify_js'] = (int) $this->config->get('module_ptcontrolpanel_minify_js')[$data['store_id']];
        } else {
            $data['minify_js'] = 0;
        }

        /* Minify CSS */
        if(isset($this->config->get('module_ptcontrolpanel_minify_css')[$data['store_id']])) {
            $data['minify_css'] = (int) $this->config->get('module_ptcontrolpanel_minify_css')[$data['store_id']];
        } else {
            $data['minify_css'] = 0;
        }

        /* Catalog Mode */
        /* Header */
        if(isset($this->config->get('module_ptcontrolpanel_header_cart')[$data['store_id']])) {
            $data['header_cart'] = (int) $this->config->get('module_ptcontrolpanel_header_cart')[$data['store_id']];
        } else {
            $data['header_cart'] = 0;
        }

        if(isset($this->config->get('module_ptcontrolpanel_header_currency')[$data['store_id']])) {
            $data['header_currency'] = (int) $this->config->get('module_ptcontrolpanel_header_currency')[$data['store_id']];
        } else {
            $data['header_currency'] = 0;
        }

        if(isset($this->config->get('module_ptcontrolpanel_module_quickview')[$data['store_id']])) {
            $module_quick_view = (int) $this->config->get('module_ptcontrolpanel_module_quickview')[$data['store_id']];
        } else {
            $module_quick_view = 0;
        }

        if(isset($this->config->get('module_ptcontrolpanel_cate_quickview')[$data['store_id']])) {
            $category_quick_view = (int) $this->config->get('module_ptcontrolpanel_cate_quickview')[$data['store_id']];
        } else {
            $category_quick_view = 0;
        }

        if($module_quick_view || $category_quick_view) {
        	$data['use_quick_view'] = true;
        } else {
			$data['use_quick_view'] = false;
        }

        /* Advance */
        if(isset($this->config->get('module_ptcontrolpanel_custom_js')[$data['store_id']])) {
            $data['custom_js'] = $this->config->get('module_ptcontrolpanel_custom_js')[$data['store_id']];
        } else {
            $data['custom_js'] = false;
        }

        if(isset($this->config->get('module_ptcontrolpanel_custom_css')[$data['store_id']])) {
            $data['custom_css'] = $this->config->get('module_ptcontrolpanel_custom_css')[$data['store_id']];
        } else {
            $data['custom_css'] = false;
        }

        $this->load->model('plaza/minify');

        $is_home = false;
        if(isset($this->request->get['route'])) {
            if($this->request->get['route'] == 'common/home') {
                $is_home = true;
            }
        } else {
            $is_home = true;
        }

        if($data['minify_js'] && $is_home) {
            if($this->cache->get('cache_mini_js_file_path') && file_exists($this->cache->get('cache_mini_js_file_path'))) {
                $minifyJsUrl = $this->cache->get('cache_mini_js_file_path');
            } else {
                $minifyJsUrl = $this->model_plaza_minify->getFilePath('js');

                $minifierJS = new JS();

                $js_files = array(
                    'catalog/view/javascript/jquery/jquery-2.1.1.min.js',
                    'catalog/view/javascript/jquery/swiper/js/swiper.min.js',
                    'catalog/view/javascript/common.js',
                    'catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js',
                    'catalog/view/javascript/plaza/cloudzoom/zoom.js',
                    'catalog/view/javascript/plaza/quickview/quickview.js',
                );

                if($data['lazy_load']) {
                    array_push($js_files, 'catalog/view/javascript/plaza/lazyload/lazysizes.min.js');
                }

                if($data['use_quick_view']) {
                    array_push($js_files, ...['catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js', 'catalog/view/javascript/plaza/cloudzoom/zoom.js', 'catalog/view/javascript/plaza/quickview/quickview.js']);
                }

                array_push($js_files, 'catalog/view/javascript/jquery/jquery-ui.js');

                foreach($js_files as $file) {
                    $minifierJS->add($file);
                }

                foreach($data['scripts'] as $script) {
                    $minifierJS->add($script);
                }

                if($data['custom_js']) $minifierJS->add($data['custom_js']);

                $minifierJS->add('catalog/view/javascript/bootstrap/js/bootstrap.min.js');

                $minifierJS->minify($minifyJsUrl);
            }
            $data['minify_js_url'] = $minifyJsUrl;
        } else {
            $data['minify_js'] = false;
        }

        if($data['minify_css'] && $is_home) {
            $theme_directory = $this->config->get('theme_' . $this->config->get('config_theme') . '_directory');

            if($this->cache->get('cache_mini_css_file_path' . $theme_directory) && file_exists($this->cache->get('cache_mini_css_file_path' . $theme_directory))) {
                $minifyCssUrl = $this->cache->get('cache_mini_css_file_path' . $theme_directory);
            } else {
                $minifyCssUrl = $this->model_plaza_minify->getFilePath('css');

                $minifierCss = new Css();

                $css_files = array(
                    'catalog/view/theme/'. $theme_directory .'/stylesheet/stylesheet.css',
                    'catalog/view/theme/'. $theme_directory .'/stylesheet/plaza/header/header' . $data['header_layout'] . '.css',
                    'catalog/view/theme/'. $theme_directory .'/stylesheet/plaza/theme.css',
                );

                if($data['use_quick_view']) {
                    array_push($css_files, 'catalog/view/theme/'. $theme_directory .'/stylesheet/plaza/quickview/quickview.css');
                }

                $minifierCss->add('catalog/view/javascript/jquery/css/jquery-ui.css');

                foreach($css_files as $file) {
                    $minifierCss->add($file);
                }

                if($data['custom_css']) $minifierCss->add($data['custom_css']);

                $minifierCss->minify($minifyCssUrl);
            }

            $data['minify_css_url'] = $minifyCssUrl;
        } else {
            $data['minify_css'] = false;
        }
        	
		
        $detect = new Mobile_Detect;
		if ( $detect->isTablet() ) {
			return $this->load->view('common/header', $data);
		} else {
			if( $detect->isMobile()){
				return $this->load->view('plaza/page_section/header_mobile', $data);
			} else {
				return $this->load->view('common/header', $data);
			}
		}
            
	}
}

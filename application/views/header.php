<header class="eltdf-page-header">
    <div class="eltdf-menu-area eltdf-menu-right">
	<div class="eltdf-grid">
            <div class="eltdf-vertical-align-containers">
		<div class="eltdf-position-left">
                    <div class="eltdf-position-left-inner">
                        <div class="">
                            <a itemprop="url" href="<?php echo site_url();?>" style="height: 115px;">
                                <img itemprop="image" class="" src="<?php echo site_url().'static/page_front/images/logo/logo_empire_black.png';?>" width="115"  alt="logo"/>
                            </a>
                        </div>
                    </div>
		</div>
		<div class="eltdf-position-right">
                    <div class="eltdf-position-right-inner">
                        <!--START NAV-->									
                            <?php $this->load->view("nav");?>
                        <!--END NAV-->
                    </div>
		</div>
            </div>
	</div>
    </div>
</header>
 <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $style_acerca = "";
                                    $style_academia = "";
                                    $style_membresia = "";
                                    $style_reporte = "";
                                    $style_blog = "";
                                    $style_contacto = "";
                                    if(isset($url[0])){
                                        switch ($url[0]) {
                                            ////////
                                                    case "home":
                                                        $style_home = "eltdf-active-item";
                                                        break;
                                                    case "about":
                                                        $style_about = "eltdf-active-itemt";
                                                        break;
                                                    case "academy":
                                                        $style_academy = "eltdf-active-item";
                                                        break;
                                                    case "membership":
                                                        $style_membership = "eltdf-active-item";
                                                        break;
                                                    case "report":
                                                        $style_report = "eltdf-active-item";
                                                        break;
                                                    case "blog":
                                                        $style_blog = "eltdf-active-item";
                                                        break;
                                                    case "contact":
                                                        $style_contact = "eltdf-active-item";
                                                        break;
                                                    default :
                                                        $style_home = "eltdf-active-item";
                                            }
                                        }
                                        ?>

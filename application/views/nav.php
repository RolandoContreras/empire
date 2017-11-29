 <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $style_acerca = "";
                                    $style_academia = "";
                                    $style_membresia = "";
                                    $style_reporte = "";
                                    $style_blog = "";
                                    $style_contacto = "";
                                        switch ($url[0]) {
                                            ////////
                                                    case "home":
                                                        $style_home = "eltdf-active-item";
                                                        break;
                                                    case "about":
                                                        $style_about = "eltdf-active-item";
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
                                        ?>

<nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
    <ul id="menu-main-menu" class="clearfix">
        <li id="nav-menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_home;?>">
            <a href="<?php echo site_url().'home';?>" class="no_link">
                <span class="item_outer">
                    <span class="item_text">Inicio</span><i class="eltdf-menu-arrow fa fa-angle-down"></i>
                </span>
            </a>
        </li>
        <li id="nav-menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_about;?>">
            <a href="<?php echo site_url().'about';?>" class="no_link">
                <span class="item_outer">
                    <span class="item_text">Acerca</span>
                </span>
            </a>
        </li>
        <li id="nav-menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_academy;?>">
            <a href="<?php echo site_url().'academy';?>" class="no_link">
                <span class="item_outer">
                    <span class="item_text">Academia</span>
                </span>
            </a>
        </li>
        <li id="nav-menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_membership;?> ">
            <a href="<?php echo site_url().'membership';?>" class="no_link">
                <span class="item_outer">
                    <span class="item_text">Membresia</span>
                </span>
            </a>
        </li>
        <li id="nav-menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_report;?> ">
            <a href="<?php echo site_url().'report';?>" class="no_link">
                <span class="item_outer">
                    <span class="item_text">Reportes</span><i class="eltdf-menu-arrow fa fa-angle-down"></i>
                </span>
            </a>
        </li>
    
    <li id="nav-menu-item-1500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow <?php echo $style_blog;?>">
        <a href="<?php echo site_url().'blog';?>" class="no_link">
            <span class="item_outer">
                <span class="item_text">Blog</span>
                <i class="eltdf-menu-arrow fa fa-angle-down"></i>
            </span>
        </a>
    </li>   
    <li id="nav-menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide <?php echo $style_contact;?>">
        <a href="<?php echo site_url().'contact';?>" class="no_link">
            <span class="item_outer">
                <span class="item_text">Contacto</span>
            </span>
        </a>
    </li>
    </ul>
</nav>
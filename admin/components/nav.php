<?php 

class nav {
public function __construct($page) {
    echo '
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    
    
        <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        ადმინისტრაცია
                    </a>
                </div>
    
                <ul class="nav">
                  
                    <li>
                        <a href="activities.php">
                            <i class="pe-7s-note2"></i>
                            <p>აქტივობები</p>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php">
                            <i class="pe-7s-photo"></i>
                            <p>გალერია</p>
                        </a>
                    </li>
                    <li>
                        <a href="partners.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>პარტნიორები</p>
                        </a>
                    </li>
                    
                   
                    <li>
                        <a href="notifications.php">
                        
                            <i class="pe-7s-bell"><span id="notifi" style="margin-top:-30px;margin-left:7px" class="badge badge-light"></span></i>
                            <p>შეტყობინება</p>
                        </a>
                    </li>
    
             
    
                    <li>
                        <a href="users.php">
                            <i class="pe-7s-users"></i>
                            <p>მომხმარებლები</p>
                        </a>
                    </li>
                     
                </ul>
            </div>
        </div>
    
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">'.$page.'</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            
                         
                           
                        </ul>
    
                        <ul class="nav navbar-nav navbar-right">
                           
                             
                            <li>
                                <a href="?logout=true" id="logoutbtn">
                                    <p>გამოსვლა</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
    
                        
                    </div>
                </div>
            </nav>';
}

}


 

  ?>
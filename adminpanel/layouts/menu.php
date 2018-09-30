<script>
    $('.treeview a').click(function(){
       $('ul.treeview-menu').css("display":"block"); 
    });
</script>
<section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-right image">
                        <img src="_Content/Images/avatar.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-right info">
                        <p>آقای گلشنی</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="جستجو">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">منو</li>
                    <li class="active">
                        <a href="http://asantablo.com/adminpanel"><i class="fa fa-dashboard"></i> <span>میزکار</span></a>
                        </li>      
                        <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>منوهای سایت</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-red">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                        
                            <li><a href="index.php?page=menus&action=list&id=0"><i class="fa fa-circle-o"></i>لیست منوها</a></li>
                         
                        </ul>
                    </li>
                    <li class="treeview" >
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>برگه ها</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=sheet&action=new"><i class="fa fa-circle-o"></i>برگه جدید</a></li>
                            <li><a href="index.php?page=sheet&action=list"><i class="fa fa-circle-o"></i>لیست برگه ها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>عاملیت ها</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=agency&action=new"><i class="fa fa-circle-o"></i>عاملیت جدید</a></li>
                            <li><a href="index.php?page=agency&action=list"><i class="fa fa-circle-o"></i>لیست عاملیت ها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>فنی و گارانتی</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=garanty-edit"><i class="fa fa-circle-o"></i>  گارانتی </a></li>
                            <li><a href="index.php?page=fanni-edit"><i class="fa fa-circle-o"></i>فنی </a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span> شعبه ها</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=agency&action=new"><i class="fa fa-circle-o"></i>شعبه جدید</a></li>
                            <li><a href="index.php?page=agency&action=list"><i class="fa fa-circle-o"></i>لیست شعبه ها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span> ویژگیهای صفحه اصلی</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=feature&action=list"><i class="fa fa-circle-o"></i> همه ویژگیها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>مقالات</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=articles&action=new"><i class="fa fa-circle-o"></i>مقاله جدید</a></li>
                            <li><a href="index.php?page=articles&action=list"><i class="fa fa-circle-o"></i>لیست مقالات</a></li>
                            <li><a href="index.php?page=cat_article&action=new"><i class="fa fa-circle-o"></i>  افزودن دسته مقالات </a></li>
                            <li><a href="index.php?page=cat_article&action=list"><i class="fa fa-circle-o"></i>دسته بندی مقالات </a></li>
                            
                        </ul>
                    </li>
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>اخبار</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-yellow">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=news&action=new"><i class="fa fa-circle-o"></i>اخبار جدید</a></li>
                            <li><a href="index.php?page=news&action=list"><i class="fa fa-circle-o"></i>لیست اخبار</a></li>
                            <li><a href="index.php?page=cat_news&action=new"><i class="fa fa-circle-o"></i>افزودن دسته خبر   </a></li>
                            <li><a href="index.php?page=cat_news&action=list"><i class="fa fa-circle-o"></i>دسته بندی اخبار </a></li>
                       </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>محصولات</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green ">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=product&action=new"><i class="fa fa-circle-o"></i>محصول جدید</a></li>
                            <li><a href="index.php?page=product&action=list"><i class="fa fa-circle-o"></i>لیست محصولات</a></li>
                            <li><a href="index.php?page=cat_product&action=new"><i class="fa fa-circle-o"></i>افزودن دسته محصولات  </a></li>
                            <li><a href="index.php?page=cat_product&action=list"><i class="fa fa-circle-o"></i>دسته بندی محصولات</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>گالری تصاویر</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-green">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=gallery&action=new"><i class="fa fa-circle-o"></i>افزودن تصویر </a></li>
                            <li><a href="index.php?page=gallery&action=list"><i class="fa fa-circle-o"></i>لیست گالری</a></li>
                       </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i>
                            <span>تنظیمات</span>
                            <span class="pull-left-container">
              <span class="label  pull-left bg-red">4</span>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display:block;">
                            <li><a href="index.php?page=setting&action=setting"><i class="fa fa-circle-o"></i>تنظیمات سایت </a></li>
                            <li><a href="index.php?page=footer&action=list"><i class="fa fa-circle-o"></i>فوتر سایت</a></li>
                            <li><a href="index.php?page=slideshow&action=list"><i class="fa fa-circle-o"></i>اسلایدشو اصلی</a></li>
                            <li><a href="index.php?page=setting&action=social"><i class="fa fa-circle-o"></i>شبکه های اجتماعی</a></li>
                            <li><a href="index.php?page=about-edit"><i class="fa fa-circle-o"></i>درباره ما</a></li>
                            <li><a href="index.php?page=setting&action=contactus"><i class="fa fa-circle-o"></i>تماس با ما</a></li>
                       </ul>
                    </li>
                    <li class="header">برچسب ها</li>
                   
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
           

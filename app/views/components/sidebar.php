     <!--begin::Sidebar-->
     <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
         data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
         data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


         <!--begin::Logo-->
         <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
             <!--begin::Logo image-->
             <a href="<?=URLROOT?>">
                 <img alt="Logo" src="<?=URLROOT?>/assets/media/misc/loggos.png"
                     class="h-60px app-sidebar-logo-default" />
             </a>
             <!--end::Logo image-->

             <!--begin::Sidebar toggle-->
             <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate "
                 data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                 data-kt-toggle-name="app-sidebar-minimize">
                 <!-- <i class="fa-solid fa-arrow-right"></i> -->
                 <i class="fa-solid fa-arrow-right fs-2 rotate-180"><span class="path1"></span><span
                         class="path2"></span></i>
             </div>
             <!--end::Sidebar toggle-->
         </div>
         <!--end::Logo-->
         <!--begin::sidebar menu-->
         <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
             <!--begin::Menu wrapper-->
             <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                 <!--begin::Scroll wrapper-->
                 <div id="kt_app_sidebar_menu_scroll" class="hover-scroll-y my-5 mx-3" data-kt-scroll="true"
                     data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                     data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                     data-kt-scroll-save-state="true">
                     <!--begin::Menu-->
                     <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold "
                         id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                         <!--begin:Menu item-->
                         <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                             <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"></span><span
                                     class="menu-title">Dashboard</span><span class="menu-arrow"></span></span>
                             <!--end:Menu link-->
                             <!--begin:Menu sub-->
                             <div class="menu-sub menu-sub-accordion">
                                 <!--begin:Menu item-->

                                 <!--end:Menu item-->
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link"
                                         href="<?=URLROOT?>/pages/dashboard"><span class="menu-bullet"><span
                                                 class="bullet bullet-dot"></span></span><span
                                             class="menu-title">Home</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->

                             </div>
                             <!--end:Menu sub-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div class="menu-item pt-5">
                             <!--begin:Menu content-->
                             <div class="menu-content"><span
                                     class="menu-heading fw-bold text-uppercase fs-7">Services</span>
                             </div>
                             <!--end:Menu content-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                             <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"></span><span
                                     class="menu-title">Transactions</span><span class="menu-arrow"></span></span>
                             <!--end:Menu link-->
                             <!--begin:Menu sub-->
                             <div class="menu-sub menu-sub-accordion">
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/transfers"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">Transfer List</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/transfers/fund"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">Make
                                             Transfer</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link"
                                         href="<?=URLROOT?>/transfers/credits"><span class=" menu-bullet"><span
                                                 class="bullet bullet-dot"></span></span><span class="menu-title">Credit
                                             history</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->

                             </div>
                             <!--end:Menu sub-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                             <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"></span><span
                                     class="menu-title">Card</span><span class="menu-arrow"></span></span>
                             <!--end:Menu link-->
                             <!--begin:Menu sub-->
                             <div class="menu-sub menu-sub-accordion">
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/cards/request"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">Enroll
                                             for Cards</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/cards"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">View Cards</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->

                             </div>
                             <!--end:Menu sub-->
                         </div>
                         <!--end:Menu item-->
                         <!--begin:Menu item-->
                         <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                             <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"></span><span
                                     class="menu-title">Loan</span><span class="menu-arrow"></span></span>
                             <!--end:Menu link-->
                             <!--begin:Menu sub-->
                             <div class="menu-sub menu-sub-accordion">
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/loans/request"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">Apply for loan</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->
                                 <!--begin:Menu item-->
                                 <div class="menu-item">
                                     <!--begin:Menu link--><a class="menu-link" href="<?=URLROOT?>/loans"><span
                                             class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                             class="menu-title">View Loans</span></a>
                                     <!--end:Menu link-->
                                 </div>
                                 <!--end:Menu item-->

                             </div>
                             <!--end:Menu sub-->
                         </div>
                         <!--end:Menu item-->


                     </div>
                     <!--end::Menu-->
                 </div>
                 <!--end::Scroll wrapper-->
             </div>
             <!--end::Menu wrapper-->
         </div>
         <!--end::sidebar menu-->
         <!--begin::Footer-->
         <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
             <a href="<?=URLROOT?>/users/logout" class=" btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0
                            h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                 title="200+ in-house components and 3rd-party plugins">

                 <span class="btn-label">
                     LOGOUT
                 </span>

                 <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                         class="path2"></span></i> </a>
         </div>
         <!--end::Footer-->
     </div>
     <!--end::Sidebar-->
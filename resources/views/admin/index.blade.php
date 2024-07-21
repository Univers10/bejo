<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="assets/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="assets/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="assets/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="assets/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="assets/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="assets/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="assets/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="assets/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="assets/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="assets/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="assets/css/lib/slick.css">
  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="index.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> AI</a>
          </li>
          <li>
            <a href="index-2.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> CRM</a>
          </li>
          <li>
            <a href="index-3.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> eCommerce</a>
          </li>
          <li>
            <a href="index-4.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Cryptocurrency</a>
          </li>
          <li>
            <a href="index-5.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Investment</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-menu-group-title">Application</li>
      <li>
        <a href="email.html">
          <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
          <span>Email</span>
        </a>
      </li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
          <span>Chat</span> 
        </a>
      </li>
      <li>
        <a href="calendar-main.html">
          <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
          <span>Calendar</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
          <span>Invoice</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="invoice-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
          </li>
          <li>
            <a href="invoice-preview.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
          </li>
          <li>
            <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add new</a>
          </li>
          <li>
            <a href="invoice-edit.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">Application</li> 

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
          <span>Components</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="typography.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
          </li>
          <li>
            <a href="colors.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Colors</a>
          </li>
          <li>
            <a href="button.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Button</a>
          </li>
          <li>
            <a href="dropdown.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Dropdown</a>
          </li>
          <li>
            <a href="alert.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Alerts</a>
          </li>
          <li>
            <a href="card.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Card</a>
          </li>
          <li>
            <a href="carousel.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Carousel</a>
          </li>
          <li>
            <a href="avatar.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Avatars</a>
          </li>
          <li>
            <a href="progress.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Progress bar</a>
          </li>
          <li>
            <a href="tabs.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Tab & Accordion</a>
          </li>
          <li>
            <a href="pagination.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
          </li>
          <li>
            <a href="badges.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Badges</a>
          </li>
          <li>
            <a href="tooltip.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Tooltip & Popover</a>
          </li>
          <li>
            <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i> Videos</a>
          </li>
          <li>
            <a href="star-rating.html"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i> Star Ratings</a>
          </li>
          <li>
            <a href="tags.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
          </li>
          <li>
            <a href="list.html"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
          </li>
          <li>
            <a href="calendar.html"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i> Calendar</a>
          </li>
          <li>
            <a href="radio.html"><i class="ri-circle-fill circle-icon text-orange w-auto"></i> Radio</a>
          </li>
          <li>
            <a href="switch.html"><i class="ri-circle-fill circle-icon text-pink w-auto"></i> Switch</a>
          </li>
          <li>
            <a href="image-upload.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
          <span>Forms</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="form.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Input Forms</a>
          </li>
          <li>
            <a href="form-layout.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
          </li>
          <li>
            <a href="form-validation.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form Validation</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
          <span>Table</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="table-basic.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
          </li>
          <li>
            <a href="table-data.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
          <span>Chart</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="line-chart.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
          </li>
          <li>
            <a href="column-chart.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
          </li>
          <li>
            <a href="pie-chart.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="widgets.html">
          <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
          <span>Widgets</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
          <span>Users</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="users-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
          </li>
          <li>
            <a href="users-grid.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
          </li>
          <li>
            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add User</a>
          </li>
          <li>
            <a href="view-profile.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">Application</li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
          <span>Authentication</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
          </li>
          <li>
            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Sign Up</a>
          </li>
          <li>
            <a href="forgot-password.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="gallery.html">
          <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
          <span>Gallery</span> 
        </a>
      </li>
      <li>
        <a href="pricing.html">
          <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
          <span>Pricing</span> 
        </a>
      </li>
      <li>
        <a href="faq.html">
          <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
          <span>FAQs.</span> 
        </a>
      </li>
      <li>
        <a href="error.html">
          <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
          <span>404</span> 
        </a>
      </li>
      <li>
        <a href="terms-condition.html">
          <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
          <span>Terms & Conditions</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
          </li>
          <li>
            <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
          </li>
          <li>
            <a href="notification-alert.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
          </li>
          <li>
            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
          </li>
          <li>
            <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
          </li>
          <li>
            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
          </li>
          <li>
            <a href="payment-gateway.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<main class="dashboard-main">
  <div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
        <div class="dropdown d-none d-sm-inline-block">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <img src="assets/images/lang-flag.png" alt="image" class="w-24 h-24 object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language</h6>
              </div>
            </div>

            <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="english"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag1.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">English</span>
                  </span>
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="english">
              </div>
  
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="japan"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag2.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Japan</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="japan">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="france"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag3.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">France</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="france">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="germany"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag4.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Germany</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="germany">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="korea"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag5.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">South Korea</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="korea">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="bangladesh"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag6.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Bangladesh</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="bangladesh">
              </div>
              
              <div class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="india"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag7.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">India</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="india">
              </div>
              <div class="form-check style-check d-flex align-items-center justify-content-between">
                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="canada"> 
                  <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                    <img src="assets/images/flags/flag8.png" alt="" class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                    <span class="text-md fw-semibold mb-0">Canada</span>
                  </span>  
                </label>
                <input class="form-check-input" type="radio" name="crypto" id="canada">
              </div>
            </div>
          </div>
        </div><!-- Language dropdown end -->

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-3.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-4.png" alt="">
                  <span class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-5.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-6.png" alt="">
                  <span class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="assets/images/notification/profile-7.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

           </div>
            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Message</a>
            </div>
          </div>
        </div><!-- Message dropdown end -->

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <iconify-icon icon="bitcoin-icons:verify-outline" class="icon text-xxl"></iconify-icon>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile has been Verified. Your profile has been Verified</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="assets/images/notification/profile-1.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can stitch between artboards</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  AM
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="assets/images/notification/profile-2.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  DR
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
           </div>

            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Notification</a>
            </div>

          </div>
        </div><!-- Notification dropdown end -->

        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div> 

  <div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Dashboard</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        Dashboard
      </a>
    </li>
    <li>-</li>
    <li class="fw-medium">eCommerce</li>
  </ul>
</div>
    
    <div class="row gy-4">
        <div class="col-xxl-9">
            <div class="card radius-8 border-0">
                <div class="row">
                    <div class="col-xxl-6 pe-xxl-0">
                        <div class="card-body p-24">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg">Revenue Report</h6>
                                <div class="">
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                                </div>
                            </div>
                            <ul class="d-flex flex-wrap align-items-center mt-3 gap-3">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                                    <span class="text-secondary-light text-sm fw-semibold">Earning: 
                                        <span class="text-primary-light fw-bold">$500,00,000.00</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                                    <span class="text-secondary-light text-sm fw-semibold">Expense: 
                                        <span class="text-primary-light fw-bold">$20,000.00</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="mt-40">
                                <div id="paymentStatusChart" class="margin-16-minus"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="row h-100 g-0">
                            <div class="col-6 p-0 m-0">
                                <div class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                        <div>
                                            <span class="mb-12 w-44-px h-44-px text-primary-600 bg-primary-light border border-primary-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                <iconify-icon icon="fa-solid:box-open" class="icon"></iconify-icon>  
                                            </span>
                                            <span class="mb-1 fw-medium text-secondary-light text-md">Total Products</span>
                                            <h6 class="fw-semibold text-primary-light mb-1">300</h6>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Increase by  <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span> this week</p>
                                </div>
                            </div>
                            <div class="col-6 p-0 m-0">
                                <div class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-start-0 border-end-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                        <div>
                                            <span class="mb-12 w-44-px h-44-px text-yellow bg-yellow-light border border-yellow-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>  
                                            </span>
                                            <span class="mb-1 fw-medium text-secondary-light text-md">Total Customer</span>
                                            <h6 class="fw-semibold text-primary-light mb-1">50,000</h6>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Increase by  <span class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm">-5k</span> this week</p>
                                </div>
                            </div>
                            <div class="col-6 p-0 m-0">
                                <div class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-bottom-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                        <div>
                                            <span class="mb-12 w-44-px h-44-px text-lilac bg-lilac-light border border-lilac-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                <iconify-icon icon="majesticons:shopping-cart" class="icon"></iconify-icon>  
                                            </span>
                                            <span class="mb-1 fw-medium text-secondary-light text-md">Total Orders</span>
                                            <h6 class="fw-semibold text-primary-light mb-1">1500</h6>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Increase by  <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+1k</span> this week</p>
                                </div>
                            </div>
                            <div class="col-6 p-0 m-0">
                                <div class="card-body p-24 h-100 d-flex flex-column justify-content-center border border-top-0 border-start-0 border-end-0 border-bottom-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                        <div>
                                            <span class="mb-12 w-44-px h-44-px text-pink bg-pink-light border border-pink-light-white flex-shrink-0 d-flex justify-content-center align-items-center radius-8 h6 mb-12">
                                                <iconify-icon icon="ri:discount-percent-fill" class="icon"></iconify-icon>  
                                            </span>
                                            <span class="mb-1 fw-medium text-secondary-light text-md">Total Sales</span>
                                            <h6 class="fw-semibold text-primary-light mb-1">$25,00,000.00</h6>
                                        </div>
                                    </div>
                                    <p class="text-sm mb-0">Increase by  <span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+$10k</span> this week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card h-100 radius-8 border-0">
                <div class="card-body p-24">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg">Customers Statistics</h6>
                        <div class="">
                        <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                        </div>
                    </div>

                    <div class="position-relative">
                        <span class="w-80-px h-80-px bg-base shadow text-primary-light fw-semibold text-xl d-flex justify-content-center align-items-center rounded-circle position-absolute end-0 top-0 z-1">+30%</span>
                        <div id="statisticsDonutChart" class="mt-36 flex-grow-1 apexcharts-tooltip-z-none title-style circle-none"></div>
                        <span class="w-80-px h-80-px bg-base shadow text-primary-light fw-semibold text-xl d-flex justify-content-center align-items-center rounded-circle position-absolute start-0 bottom-0 z-1">+25%</span>
                    </div>
                    
                    <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                            <span class="text-secondary-light text-sm fw-normal">Male: 
                                <span class="text-primary-light fw-bold">20,000</span>
                            </span>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                            <span class="text-secondary-light text-sm fw-normal">Female:  
                                <span class="text-primary-light fw-bold">25,000</span>
                            </span>
                        </li>
                    </ul>
               
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-lg-6">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Recent Orders</h6>
                        <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                            <th scope="col">Users</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Items</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Amount</th>
                            <th scope="col" class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Dianne Russell</span>
                                </div>
                            </td>
                            <td>#6352148</td>
                            <td>iPhone 14 max</td>
                            <td>2</td>
                            <td>$5,000.00</td>
                            <td class="text-center"> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user2.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Wade Warren</span>
                                </div>
                            </td>
                            <td>#6352148</td>
                            <td>Laptop HPH </td>
                            <td>3</td>
                            <td>$1,000.00</td>
                            <td class="text-center"> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user3.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Albert Flores</span>
                                </div>
                            </td>
                            <td>#6352148</td>
                            <td>Smart Watch </td>
                            <td>7</td>
                            <td>$1,000.00</td>
                            <td class="text-center"> <span class="bg-info-focus text-info-main px-24 py-4 rounded-pill fw-medium text-sm">Shipped</span> </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user4.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Bessie Cooper</span>
                                </div>
                            </td>
                            <td>#6352148</td>
                            <td>Nike Air Shoe</td>
                            <td>1</td>
                            <td>$3,000.00</td>
                            <td class="text-center"> <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span> </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user5.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <span class="text-lg text-secondary-light fw-semibold flex-grow-1">Arlene McCoy</span>
                                </div>
                            </td>
                            <td>#6352148</td>
                            <td>New Headphone </td>
                            <td>5</td>
                            <td>$4,000.00</td>
                            <td class="text-center"> <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Canceled</span> </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3">
            <div class="card h-100">
          
                <div class="card-body">
                  <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                    <h6 class="mb-2 fw-bold text-lg">Transactions</h6>
                    <div class="">
                    <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                        <option>This Month</option>
                        <option>Last Month</option>
                    </select>
                    </div>
                </div>
      
                  <div class="mt-32">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment1.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                          <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                        </div>
                      </div>
                      <span class="text-danger text-md fw-medium">-$20</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment2.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">PayPal</h6>
                          <span class="text-sm text-secondary-light fw-normal">Client Payment</span>
                        </div>
                      </div>
                      <span class="text-success-main text-md fw-medium">+$800</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment3.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                          <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                        </div>
                      </div>
                      <span class="text-danger-main text-md fw-medium">-$300</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment4.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">Razorpay</h6>
                          <span class="text-sm text-secondary-light fw-normal">Refund</span>
                        </div>
                      </div>
                      <span class="text-success-main text-md fw-medium">+$500</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment1.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">Paytm</h6>
                          <span class="text-sm text-secondary-light fw-normal">Starbucks</span>
                        </div>
                      </div>
                      <span class="text-danger-main text-md fw-medium">-$1500</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-2">
                        <img src="assets/images/payment/payment3.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                        <div class="flex-grow-1">
                          <h6 class="text-md mb-0 fw-normal">Stripe</h6>
                          <span class="text-sm text-secondary-light fw-normal">Ordered iPhone 14</span>
                        </div>
                      </div>
                      <span class="text-success-main text-md fw-medium">+$800</span>
                    </div>

                  </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card h-100 radius-8 border">
                <div class="card-body p-24">
                    <h6 class="mb-12 fw-bold text-lg mb-0">Recent Orders</h6>
                    <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold mb-0">$27,200</h6>
                        <p class="text-sm mb-0">
                            <span class="bg-success-focus border border-success px-8 py-2 rounded-pill fw-semibold text-success-main text-sm d-inline-flex align-items-center gap-1">
                                10%
                                <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon>  
                            </span> 
                            Increases 
                        </p>
                    </div>
                  <div id="recent-orders" class="mt-28"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6">
            <div class="card radius-8 border-0">
    
              <div class="card-body">
                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                  <h6 class="mb-2 fw-bold text-lg">Distribution Maps</h6>
                  <div class="">
                    <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                      <option>Yearly</option>
                      <option>Monthly</option>
                      <option>Weekly</option>
                      <option>Today</option>
                    </select>
                  </div>
                </div>
              </div>
    
              <div id="world-map"></div>
    
              <div class="card-body p-24 max-h-266-px scroll-sm overflow-y-auto">
                <div class="">
    
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                    <div class="d-flex align-items-center w-100">
                        <img src="assets/images/flags/flag1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                      <div class="flex-grow-1">
                        <h6 class="text-sm mb-0">USA</h6>
                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                      <div class="w-100 max-w-66 ms-auto">
                        <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-primary-600 rounded-pill" style="width: 80%;"></div>
                        </div>
                      </div>
                      <span class="text-secondary-light font-xs fw-semibold">80%</span>
                    </div>
                  </div>
    
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                    <div class="d-flex align-items-center w-100">
                        <img src="assets/images/flags/flag2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                      <div class="flex-grow-1">
                        <h6 class="text-sm mb-0">Japan</h6>
                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                      <div class="w-100 max-w-66 ms-auto">
                        <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-orange rounded-pill" style="width: 60%;"></div>
                        </div>
                      </div>
                      <span class="text-secondary-light font-xs fw-semibold">60%</span>
                    </div>
                  </div>
    
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                    <div class="d-flex align-items-center w-100">
                        <img src="assets/images/flags/flag3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                      <div class="flex-grow-1">
                        <h6 class="text-sm mb-0">France</h6>
                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                      <div class="w-100 max-w-66 ms-auto">
                        <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-yellow rounded-pill" style="width: 49%;"></div>
                        </div>
                      </div>
                      <span class="text-secondary-light font-xs fw-semibold">49%</span>
                    </div>
                  </div>
    
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center w-100">
                        <img src="assets/images/flags/flag4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                      <div class="flex-grow-1">
                        <h6 class="text-sm mb-0">Germany</h6>
                        <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 w-100">
                      <div class="w-100 max-w-66 ms-auto">
                        <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success-main rounded-pill" style="width: 100%;"></div>
                        </div>
                      </div>
                      <span class="text-secondary-light font-xs fw-semibold">100%</span>
                    </div>
                  </div>
    
                </div>
                
              </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-6">
            <div class="card h-100">
          
              <div class="card-body">
                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                  <h6 class="mb-2 fw-bold text-lg mb-0">Top Customers</h6>
                  <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                      View All
                      <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                  </a>
                </div>
    
                <div class="mt-32">
                  
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user6.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">Dianne Russell</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 30</span>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">Wade Warren</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 30</span>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user2.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">Albert Flores</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 35</span>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user3.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">Bessie Cooper</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 20</span>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user4.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">Arlene McCoy</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 25</span>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-2">
                      <img src="assets/images/users/user6.png" alt="" class="w-40-px h-40-px radius-8 flex-shrink-0">
                      <div class="flex-grow-1">
                        <h6 class="text-md mb-0 fw-normal">John Doe</h6>
                        <span class="text-sm text-secondary-light fw-normal">017******58</span>
                      </div>
                    </div>
                    <span class="text-primary-light text-md fw-medium">Orders: 32</span>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
        <div class="col-xxl-6">
          <div class="card h-100">
              <div class="card-body p-24">
                  <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                      <h6 class="mb-2 fw-bold text-lg mb-0">Top Selling Product</h6>
                      <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                          View All
                          <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                      </a>
                  </div>
                  <div class="table-responsive scroll-sm">
                      <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                              <th scope="col">Items</th>
                              <th scope="col">Price</th>
                              <th scope="col">Discount </th>
                              <th scope="col">Sold</th>
                              <th scope="col" class="text-center">Total Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <img src="assets/images/product/product-img1.png" alt="" class="flex-shrink-0 me-12 radius-8 me-12">
                                      <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Blue t-shirt</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                      </div>
                                  </div>
                              </td>
                              <td>$500.00</td>
                              <td>15%</td> 
                              <td>300</td>
                              <td class="text-center"> 
                                <span class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span> 
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <img src="assets/images/product/product-img2.png" alt="" class="flex-shrink-0 me-12 radius-8 me-12">
                                      <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Nike Air Shoe</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                      </div>
                                  </div>
                              </td>
                              <td>$150.00</td>
                              <td>N/A</td> 
                              <td>200</td>
                              <td class="text-center"> 
                                <span class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span> 
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <img src="assets/images/product/product-img3.png" alt="" class="flex-shrink-0 me-12 radius-8 me-12">
                                      <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Woman Dresses</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                      </div>
                                  </div>
                              </td>
                              <td>$300.00</td>
                              <td>$50.00</td> 
                              <td>1500</td>
                              <td class="text-center"> 
                                <span class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span> 
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <img src="assets/images/product/product-img4.png" alt="" class="flex-shrink-0 me-12 radius-8 me-12">
                                      <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Smart Watch</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                      </div>
                                  </div>
                              </td>
                              <td>$400.00</td>
                              <td>$50.00</td> 
                              <td>700</td>
                              <td class="text-center"> 
                                <span class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span> 
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <img src="assets/images/product/product-img5.png" alt="" class="flex-shrink-0 me-12 radius-8 me-12">
                                      <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-normal">Hoodie Rose</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Fashion</span>
                                      </div>
                                  </div>
                              </td>
                              <td>$300.00</td>
                              <td>25%</td> 
                              <td>500</td>
                              <td class="text-center"> 
                                <span class="bg-success-focus text-success-main px-32 py-4 rounded-pill fw-medium text-sm">70</span> 
                              </td>
                            </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-xxl-6">
          <div class="card h-100">
              <div class="card-body p-24">
                  <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                      <h6 class="mb-2 fw-bold text-lg mb-0">Stock Report</h6>
                      <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                          View All
                          <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                      </a>
                  </div>
                  <div class="table-responsive scroll-sm">
                      <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                              <th scope="col">Items</th>
                              <th scope="col">Price</th>
                              <th scope="col">
                                <div class="max-w-112 mx-auto">
                                  <span>Stock</span>
                                </div>
                              </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Nike Air Shoes</td>
                              <td>$500.00</td>
                              <td> 
                                <div class="max-w-112 mx-auto">
                                  <div class="w-100">
                                    <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar bg-primary-600 rounded-pill" style="width: 0%;"></div>
                                    </div>
                                  </div>
                                  <span class="mt-12 text-secondary-light text-sm fw-medium">Out of Stock</span>                                
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Nike Air Shoes</td>
                              <td>$300.00</td>
                              <td> 
                                <div class="max-w-112 mx-auto">
                                  <div class="w-100">
                                    <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar bg-danger-main rounded-pill" style="width: 40%;"></div>
                                    </div>
                                  </div>
                                  <span class="mt-12 text-secondary-light text-sm fw-medium">18 Low Stock</span>                                
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Nike Air Shoes</td>
                              <td>$500.00</td>
                              <td> 
                                <div class="max-w-112 mx-auto">
                                  <div class="w-100">
                                    <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar bg-success-main rounded-pill" style="width: 80%;"></div>
                                    </div>
                                  </div>
                                  <span class="mt-12 text-secondary-light text-sm fw-medium">80 High Stock</span>                                
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Nike Air Shoes</td>
                              <td>$300.00</td>
                              <td> 
                                <div class="max-w-112 mx-auto">
                                  <div class="w-100">
                                    <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar bg-success-main rounded-pill" style="width: 50%;"></div>
                                    </div>
                                  </div>
                                  <span class="mt-12 text-secondary-light text-sm fw-medium">50 High Stock</span>                                
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Nike Air Shoes</td>
                              <td>$150.00</td>
                              <td> 
                                <div class="max-w-112 mx-auto">
                                  <div class="w-100">
                                    <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="progress-bar bg-success-main rounded-pill" style="width: 70%;"></div>
                                    </div>
                                  </div>
                                  <span class="mt-12 text-secondary-light text-sm fw-medium">70 High Stock</span>                                
                                </div>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
    </div>
    
  </div>

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
  
  <!-- jQuery library js -->
  <script src="assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="assets/js/lib/slick.min.js"></script>
  <!-- main js -->
  <script src="assets/js/app.js"></script>

<script src="assets/js/homeThreeChart.js"></script>

</body>
</html>
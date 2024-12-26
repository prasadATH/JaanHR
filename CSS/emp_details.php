<?php include("./includes/header.php"); ?>
<div class="w-full flex h-auto bg-[#FFFFFF]">
<div class="w-1/5 bg-[#D9D9D9] rounded-3xl pt-24 shadow-md p-8 flex flex-col justify-center items-center">
  <!-- Main Menu -->
  <div class="w-5/6 mb-6 space-y-8">
    <h2 class="text-[#00000080] font-extrabold text-2xl mb-4 nunito-">MAIN MENU</h2>
    <ul class="w-full space-y-8">
      <li class="mb-2">
        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
        <div class="flex items-center w-full space-x-4">
          <span class="iconify" data-icon="ic:baseline-dashboard" style="width: 16px; height: 16px;"></span>
          <span id="dashboard" class="text-xl font-extrabold text-black nunito-">Dashboard</span>
            </div>
        </a>
      </li>
      <li class="mb-2">
        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
        <div class="flex items-center w-full space-x-4">
        <span class="iconify" data-icon="fluent-emoji-high-contrast:department-store" style="width: 16px; height: 16px;"></span>
            <span id="Departments" class="text-xl font-bold text-black nunito-">Departments</span>
        </div>
        </a>
      </li>
      <li>
        <button class="flex items-center justify-between w-full space-x-2 text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('employeeMenu')">
            <div class="flex items-center w-full space-x-4">
            <span class="iconify" data-icon="ic:round-man" style="width: 16px; height: 16px;"></span>
            <p class="text-xl font-bold text-black nunito-">Employee</p>
            </div>
          <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        <ul id="employeeMenu" class="hidden pl-6 space-y-2">
        <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 rounded-full bg-gradient-to-b from-blue-600 to-teal-400"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
            </div>
            <!-- Labels -->
            <div class="ml-4">
              <div class="flex flex-col space-y-6">
              <a href="#" class="text-[#0F5A80] hover:text-blue-500 font-semibold nunito-">Expense 1</a>
              <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Expense 2</a>
              </div>
            </div>
            </div>
        </ul>
      </li>
    </ul>
  </div>

   <!-- Finance -->
  <div class="w-5/6 pt-4 mb-6 space-y-8">
  <h2 class="text-[#00000080] font-bold text-2xl mb-4 nunito-">FINANCE</h2>
  <ul class="w-full space-y-8">
    <!-- Payroll -->
    <li class="w-full space-y-4">
    <button class="flex items-center justify-between w-full text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('payrollMenu'); toggleGradientText()">
      <div class="flex items-center w-full space-x-4">
        <span class="iconify" data-icon="fluent:reciept-20-filled" style="width: 16px; height: 16px;"></span>
        <p id="payrollText" class="text-xl font-bold text-black transition-all duration-300 cursor-pointer nunito-">Payroll</p>
      </div>
      <p class="text-xl text-blue-500"><i class="ri-arrow-down-s-line"></i></p>
    </button>

      
      <div id="payrollMenu" class="hidden pl-6">
  <div class="flex items-center">
    <!-- Timeline -->
    <div class="flex flex-col items-center">
      <div class="w-2 h-2 rounded-full bg-gradient-to-b from-blue-600 to-teal-400"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
    </div>
    <!-- Labels -->
    <div class="ml-4">
      <div class="flex flex-col space-y-6">
        <a href="#" class="text-[#0F5A80] hover:text-blue-500 font-semibold nunito-">Department Wise</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Salary Components</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Processing Details</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Reports</a>
      </div>
    </div>
  </div>
</div>

    </li>
    <!-- Loan -->
    <li class="mb-2">
      <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
      <span class="iconify" data-icon="majesticons:money" style="width: 16px; height: 16px;"></span>
      <span id="Loan" class="text-xl font-bold text-black nunito-">Loan</span>
      </a>
    </li>
    <!-- Expenses Claim -->
    <li>
      <button class="flex items-center justify-between w-full text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('expensesMenu')">
        <div class="flex items-center w-full space-x-4">
        <span class="iconify" data-icon="material-symbols-light:list-alt" style="width: 16px; height: 16px;"></span>
          <p class="text-xl font-bold text-black nunito-">Expenses Claim</p>
        </div>
        <p class="text-xl text-blue-500"><i class="ri-arrow-down-s-line"></i></p>
      </button>
      <div id="expensesMenu" class="hidden pl-6">
        <div class="flex items-center">
          
          <!-- Labels -->
          <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 rounded-full bg-gradient-to-b from-blue-600 to-teal-400"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
            </div>
            <!-- Labels -->
            <div class="ml-4">
              <div class="flex flex-col space-y-6">
              <a href="#" class="text-[#0F5A80] hover:text-blue-500 font-semibold nunito-">Expense 1</a>
              <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Expense 2</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>

  <!-- Other Menu -->
  <div class="w-5/6 pt-4 mb-6 space-y-8">
    <h2 class="text-[#00000080] font-bold text-2xl mb-4 nunito-">OTHER MENU</h2>
    <ul class="w-full space-y-8">
      <li>
        <button class="flex items-center w-full space-x-2 text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('attendanceMenu')">
        <div class="flex items-center w-full space-x-4">
        <span class="iconify" data-icon="uil:calender" style="width: 16px; height: 16px;"></span>
        <p class="text-xl font-bold text-black nunito-">Attendance</p>
        </div>
        <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        
        <div id="attendanceMenu" class="flex items-center hidden">
    <!-- Timeline -->
    <div class="flex flex-col items-center">
      <div class="w-2 h-2 rounded-full bg-gradient-to-b from-blue-600 to-teal-400"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
      <div class="w-1 h-10 bg-black"></div>
      <div class="w-2 h-2 bg-black rounded-full"></div>
    </div>
    <!-- Labels -->
    <div class="ml-4">
      <div class="flex flex-col space-y-6">
        <a href="#" class="text-[#0F5A80] hover:text-blue-500 font-semibold nunito-">Department Wise</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Salary Components</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Processing Details</a>
        <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Reports</a>
      </div>
    </div>
  </div>
      </li>
      <li>
        <button class="flex items-center justify-between w-full space-x-2 text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('leavesMenu')">
        <div class="flex items-center w-full space-x-4">
        <span class="iconify" data-icon="simple-line-icons:calender" style="width: 16px; height: 16px;"></span>
        <p id="LeaveText" class="text-xl font-bold text-black transition-all duration-300 cursor-pointer nunito-">Leave</p>
            </div>
        <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        <ul id="leavesMenu" class="hidden pl-6 space-y-2">
        <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 rounded-full bg-gradient-to-b from-blue-600 to-teal-400"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
              <div class="w-1 h-10 bg-black"></div>
              <div class="w-2 h-2 bg-black rounded-full"></div>
            </div>
            <!-- Labels -->
            <div class="ml-4">
              <div class="flex flex-col space-y-6">
              <a href="#" class="text-[#0F5A80] hover:text-blue-500 font-semibold nunito-">Expense 1</a>
              <a href="#" class="font-medium text-black hover:text-blue-500 nunito-">Expense 2</a>
              </div>
            </div>
          </div>
          
        </ul>
      </li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><span class="iconify" data-icon="material-symbols:event-list" style="width: 16px; height: 16px;"></span>
      <span id="Incident" class="text-xl font-bold text-black nunito-">Incident</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><span class="iconify" data-icon="hugeicons:job-search" style="width: 16px; height: 16px;"></span>
      <span class="text-xl font-bold text-black nunito-">Jobs</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><span class="iconify" data-icon="hugeicons:structure-03" style="width: 16px; height: 16px;"></span>
      <span class="text-xl font-bold text-black nunito-">Company Structure</span></a></li>
    </ul>
  </div>

  <!-- Settings and Help -->
  <div class="w-5/6 mt-auto space-y-8">
    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
    <span class="iconify" data-icon="proicons:settings" style="width: 16px; height: 16px;"></span>
    <span class="text-xl font-bold text-black nunito-">Settings</span>
    </a>
    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
    <span class="iconify" data-icon="cuida:help-outline" style="width: 16px; height: 16px;"></span>
    <span class="text-xl font-bold text-black nunito-">Help & Center</span>
    </a>
  </div>
</div>
<div class="flex flex-col items-start justify-start w-full px-16">
<div class="w-full flex space-y-2 space-x-8 border-b-2 border-[#00000080] pb-8 pl-8 pt-8">
  <div class="flex w-5/6">
  <input id="input-field" type="text" placeholder="Search employee here" class="w-full px-4 py-2 border-2 border-[#00000080] text-2xl text-[#00000080] rounded-xl"/>
  </div>
    <div class="flex items-center justify-center w-20 p-4 border-2 border-black rounded-full">
      <p class="text-3xl"><i class="ri-notification-4-line"></i></p>
    </div>
    <div class="flex items-center justify-center w-20 border-2 border-black rounded-full">
      <img src="./assetes/image/bg1.png" class="object-cover w-8 h-12">
    </div>
    <div class="flex items-center justify-center w-20">
    <p class="text-3xl"><i class="ri-arrow-down-s-fill"></i></p>
    </div>
</div>
<div class="w-full pt-8">
  <div class="flex items-center justify-between w-full">
    <div class="flex ">
    <p class="text-6xl font-bold text-black nunito-">EMPLOYEE</p>
    </div>
    <div class="flex items-center space-x-4">
    <!-- Filter Button -->
    <button class="flex items-center justify-between w-1/3 px-4 py-2 text-[#00000066] text-2xl bg-[#D9D9D980] border-2 border-[#D9D9D980] rounded-md hover:bg-gray-200">
        <p class="text-3xl"><i class="ri-filter-2-line"></i></p>
        <span>Filter</span>
        <p class="text-3xl text-[#00000066]"><i class="ri-arrow-down-s-line"></i></p>
    </button>

    <!-- Add Employee Button -->
    <button class="flex items-center justify-center space-x-2 px-10 py-2 text-white text-2xl bg-gradient-to-r from-[#184E77] to-[#52B69A] rounded-xl shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
        <p class="text-3xl"><i class="ri-add-fill"></i></p>
        <span>Add Employee</span>
    </button>
    </div>

  </div>
  <div class="w-full flex justify-end items-end pt-4 pr-2">
  <button class="flex items-center justify-center space-x-8 px-10 py-2 text-[#184E77] border-2 border-[#184E77] text-2xl bg-white rounded-xl shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
        <p class="text-3xl"><i class="ri-edit-box-line"></i></p>
        <span>Edit Details</span>
    </button>
  </div>
</div>
<nav class="flex px-5 py-3" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-3xl font-medium text-[#00000080] hover:text-blue-600">
        Employee
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <p class="text-[#00000080] text-3xl"><i class="ri-arrow-right-wide-line"></i></p>
        <a href="#" class="ml-1 font-medium text-[#00000080] text-3xl hover:text-blue-600">Employee Management</a>
      </div>
    </li>
  </ol>
</nav>
<div>
  
</div>
<div class="w-full flex space-x-32">
  <div class="w-1/2 flex flex-col pt-8 pb-4 space-y-4">
    <div class="w-full flex">
    <div class="w-1/3 flex justify-start items-center">
    <img src="./assetes/image/bg1.png" class="w-48 h-48 rounded-full">
    </div>
    <div class="w-2/3 flex flex-col justify-center items-start space-y-4 nunito-">
          <p class="text-5xl text-black font-bold">Jenny Wilson</p>
          <p class="text-5xl text-black font-bold">2345765</p>
          <p class="text-3xl text-[#00000080] font-bold">Senior Project Manager </p>
    </div>
    </div>
    <div class="w-full h-1/2">
    <p class="text-xl text-[#00000099] text-justify">The oldest classical British and Latin writings had little or no space between words and could be written in boustrophedon (alternating directions). Over time, text direction (left to right) became standardized. Word dividers and terminal punctuation became common. </p>
    </div>  
</div>
  <div class="w-1/2 flex flex-col justify-center items-center nunito- space-y-4 p-8 bg-[#D9D9D980] rounded-3xl">
    <div class="w-full flex justify-between items-center">
        <p class="text-3xl font-bold text-black">Legal Documents</p>
        
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="flex space-x-8">
      <p class="text-5xl"><i class="ri-file-pdf-2-fill"></i></p>
      <div class="flex flex-col">
        <p class="text-2xl font-bold">CV for the job interview</p>
        <div class=" flex justify-between items-center">
          <p>320.0 MB</p>
          <p>12 / 10 / 2023</p>
        </div>
      </div>
      </div>
      <div class="justify-end items-end pr-8">
      <p class="text-xl"><i class="ri-close-large-fill"></i></p>
      </div>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="flex space-x-8">
      <p class="text-5xl"><i class="ri-file-pdf-2-fill"></i></p>
      <div class="flex flex-col">
        <p class="text-2xl font-bold">CV for the job interview</p>
        <div class=" flex justify-between items-center">
          <p>320.0 MB</p>
          <p>12 / 10 / 2023</p>
        </div>
      </div>
      </div>
      <div class="justify-end items-end pr-8">
      <p class="text-xl"><i class="ri-close-large-fill"></i></p>
      </div>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="flex space-x-8">
      <p class="text-5xl"><i class="ri-file-pdf-2-fill"></i></p>
      <div class="flex flex-col">
        <p class="text-2xl font-bold">CV for the job interview</p>
        <div class=" flex justify-between items-center">
          <p>320.0 MB</p>
          <p>12 / 10 / 2023</p>
        </div>
      </div>
      </div>
      <div class="justify-end items-end pr-8">
      <p class="text-xl"><i class="ri-close-large-fill"></i></p>
      </div>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="flex space-x-8">
      <p class="text-5xl"><i class="ri-file-pdf-2-fill"></i></p>
      <div class="flex flex-col">
        <p class="text-2xl font-bold">CV for the job interview</p>
        <div class=" flex justify-between items-center">
          <p>320.0 MB</p>
          <p>12 / 10 / 2023</p>
        </div>
      </div>
      </div>
      <div class="justify-end items-end pr-8">
      <p class="text-xl"><i class="ri-close-large-fill"></i></p>
      </div>
    </div>
  </div>
</div>

    <div class="w-full flex space-x-16 pt-8">
    <div class="w-full flex flex-col space-y-4 p-8 bg-[#D9D9D980] rounded-3xl cursor-pointer nunito focus:outline-none focus:ring-2 focus:ring-[#52B69A] focus:border-[#184E77]">
    <div class="w-full flex pl-8">
        <p class="text-3xl font-bold text-black">Employment Information</p>
    </div>
    <div class="w-full flex">
        <div class="w-1/2 flex flex-col pl-8 space-y-4 text-[#00000080]">
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <p class="text-xl">Job Title</p>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <p class="text-xl">Department</p>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <p class="text-xl">Branch</p>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <p class="text-xl">Employment Type</p>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <p class="text-xl">Probation Period</p>
            </div>
        </div>
        <div class="w-3/4 space-y-4 pl-16 text-black font-bold">   
            <p class="text-xl">Senior Project Manager</p>
            <p class="text-xl">Designing Department</p>
            <p class="text-xl">Colombo 15</p>
            <p class="text-xl">Full-Time</p>
            <p class="text-xl">May 23 , 2024</p>
            <p class="text-xl">06 Months </p>
        </div>
    </div>
    
    </div>
    <div class="w-full flex flex-col space-y-8 p-8 bg-[#D9D9D980] rounded-3xl mt-4 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#52B69A] focus:border-[#184E77]">
    <div class="w-full flex pl-8">
        <p class="text-3xl font-bold text-black">Personal Information</p>
    </div>
    <div class="w-full flex">
        <div class="w-1/2 flex flex-col pl-8 space-y-4 text-[#00000080]">
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="full_name" class="text-xl">Full Name</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="age" class="text-xl">Age</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="email" class="text-xl">Email Address</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="phone" class="text-xl">Phone Number</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="gender" class="text-xl">Gender</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="dob" class="text-xl">Date of Birth</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="address" class="text-xl">Living Address</label>
            </div>
        </div>
        <div class="w-3/4 space-y-4 pl-16 text-black font-bold">
        <p class="text-xl">Jenny Wilson Jenny Wilson</p>
        <p class="text-xl">25 yrs</p>
        <p class="text-xl">jennywilson24@gmail.com</p>
        <p class="text-xl">+94 773 301 652</p>
        <p class="text-xl">Male</p>
        <p class="text-xl">December 24, 2000</p>
        <p class="text-xl">Queens Rd , Colombo 10 , Sri Lanka</p>
        </div>
    </div>
</div>

    </div>
    <div class="w-full flex space-x-16 pb-8 pt-8">
        <div class="w-full flex flex-col h-auto space-y-8 p-8 bg-[#D9D9D980] rounded-3xl nunito cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#52B69A] focus:border-[#184E77]">
    <div class="w-full flex pl-8">
        <p class="text-3xl font-bold text-black">Education and Experience</p>
    </div>
    <div class="w-full flex">
        <div class="w-1/2 flex flex-col pl-8 space-y-4 text-[#00000080]">
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="degree" class="text-xl">Degree</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="institution" class="text-xl">Institution</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="graduation_year" class="text-xl">Graduation Year</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="work_experience" class="text-xl">Work Experience</label>
            </div>
        </div>
        <div class="w-3/4 space-y-4 pl-16 text-black font-bold">
            <p class="text-xl">BSc (Hons) Software Engineering</p>
            <p class="text-xl">University of Westminster</p>
            <p class="text-xl">2024</p>
            <div class="w-full flex flex-col">
            <p class="text-xl">2015 - 2020</p>
            <p class="text-xl">Project Manager</p>
            <p class="text-xl">IFS , Sri Lanka </p>
            </div>
        </div>
    </div>
    
    </div>
    <div class="w-full flex flex-col h-auto space-y-8 p-8 bg-[#D9D9D980] rounded-3xl nunito cursor-pointer mt-4 focus:outline-none focus:ring-2 focus:ring-[#52B69A] focus:border-[#184E77]">
    <div class="w-full flex pl-8">
        <p class="text-3xl font-bold text-black">Training and Certification</p>
    </div>
    <div class="w-full flex">
        <div class="w-1/2 flex flex-col pl-8 space-y-4 text-[#00000080]">
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="course_name" class="text-xl">Course Name</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="training_provider" class="text-xl">Training Provider</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="completion_date" class="text-xl">Completion Date</label>
            </div>
            <div class="w-full flex space-x-8">
                <p class="text-xl"><i class="ri-info-card-fill"></i></p>
                <label for="certification_status" class="text-xl">Certification Status</label>
            </div>
        </div>
        <div class="w-3/4 space-y-4 pl-16 text-black font-bold">
            <p class="text-xl">BSc (Hons) Software Engineering</p>
            <p class="text-xl">University of Westminster</p>
            <p class="text-xl">2024</p>
            <p class="text-xl">Merit</p>
        </div>
    </div>
</div>

    </div>

</div>

</div>

<script>
  function toggleGradientText() {
    const textElement = document.getElementById('payrollText');
    if (textElement.classList.contains('text-black')) {
      // Apply gradient
      textElement.classList.remove('text-black');
      textElement.classList.add('bg-gradient-to-r', 'from-[#184E77]', 'to-[#52B69A]', 'text-transparent', 'bg-clip-text');
    } else {
      // Revert to black
      textElement.classList.add('text-black');
      textElement.classList.remove('bg-gradient-to-r', 'from-[#184E77]', 'to-[#52B69A]', 'text-transparent', 'bg-clip-text');
    }
  }
  
  function toggleMenu(menuId) {
    const menu = document.getElementById(menuId);
    menu.classList.toggle('hidden');
  }
  const textElements = document.querySelectorAll('span.text-xl');

textElements.forEach((element) => {
    element.addEventListener('click', function () {
        // Reset all text elements to black
        textElements.forEach((el) => {
            el.classList.remove('bg-gradient-to-r', 'from-[#184E77]', 'to-[#52B69A]', 'text-transparent', 'bg-clip-text');
            el.classList.add('text-black');
        });

        // Apply gradient to the clicked element
        this.classList.remove('text-black');
        this.classList.add('bg-gradient-to-r', 'from-[#184E77]', 'to-[#52B69A]', 'text-transparent', 'bg-clip-text');
    });
});

</script>
  
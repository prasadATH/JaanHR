<?php include("./includes/header.php"); ?>
<?php include("./includes/log_nav.php"); ?>
<div class="w-full flex h-auto bg-[#FFFFFF]">
<div class="w-1/5 bg-[#D9D9D9] rounded-3xl pt-24 shadow-md p-8 flex flex-col justify-center items-center">
  <!-- Main Menu -->
  <div class="mb-6 space-y-8 w-5/6">
    <h2 class="text-[#00000080] font-extrabold text-2xl mb-4 nunito-">MAIN MENU</h2>
    <ul class="w-full space-y-8">
      <li class="mb-2">
        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
        <div class="w-full flex space-x-4 items-center">
            <p><i class="ri-user-fill"></i></p>
            <span id="dashboard" class="text-xl text-black font-extrabold nunito-">Dashboard</span>
            </div>
        </a>
      </li>
      <li class="mb-2">
        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
        <div class="w-full flex space-x-4 items-center">
            <p><i class="ri-user-fill"></i></p>
            <span id="Departments" class="text-xl text-black font-bold nunito-">Departments</span>
        </div>
        </a>
      </li>
      <li>
        <button class="flex justify-between items-center space-x-2 text-gray-600 hover:text-blue-500 w-full focus:outline-none" onclick="toggleMenu('employeeMenu'); toggleGradientText1()">
            <div class="w-full flex space-x-4 items-center">
            <p><i class="ri-user-fill"></i></p>
            <p id="EmployeeText" class="text-xl font-bold text-black cursor-pointer transition-all duration-300 nunito-">Employee</p>
            </div>
          <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        <ul id="employeeMenu" class="hidden pl-6 space-y-2">
        <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 bg-gradient-to-b from-blue-600 to-teal-400 rounded-full"></div>
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
              <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Expense 2</a>
              </div>
            </div>
            </div>
        </ul>
      </li>
    </ul>
  </div>

   <!-- Finance -->
  <div class="mb-6 space-y-8 w-5/6 pt-4">
  <h2 class="text-[#00000080] font-bold text-2xl mb-4 nunito-">FINANCE</h2>
  <ul class="w-full space-y-8">
    <!-- Payroll -->
    <li class="w-full space-y-4">
    <button class="flex justify-between items-center w-full text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('payrollMenu'); toggleGradientText()">
      <div class="w-full flex items-center space-x-4">
        <p><i class="ri-book-line text-xl text-blue-600"></i></p>
        <p id="payrollText" class="text-xl font-bold text-black cursor-pointer transition-all duration-300 nunito-">Payroll</p>
      </div>
      <p class="text-xl text-blue-500"><i class="ri-arrow-down-s-line"></i></p>
    </button>

      
      <div id="payrollMenu" class="hidden pl-6">
  <div class="flex items-center">
    <!-- Timeline -->
    <div class="flex flex-col items-center">
      <div class="w-2 h-2 bg-gradient-to-b from-blue-600 to-teal-400 rounded-full"></div>
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
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Salary Components</a>
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Processing Details</a>
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Reports</a>
      </div>
    </div>
  </div>
</div>

    </li>
    <!-- Loan -->
    <li class="mb-2">
      <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
        <p><i class="ri-money-dollar-circle-line text-xl"></i></p>
        <span id="Loan" class="text-xl text-black font-bold nunito-">Loan</span>
      </a>
    </li>
    <!-- Expenses Claim -->
    <li>
      <button class="flex justify-between items-center w-full text-gray-600 hover:text-blue-500 focus:outline-none" onclick="toggleMenu('expensesMenu'); toggleGradientText2()">
        <div class="w-full flex items-center space-x-4">
          <p><i class="ri-file-list-line text-xl text-blue-600"></i></p>
          <p id="ExpensesText" class="text-xl font-bold text-black cursor-pointer transition-all duration-300 nunito-">Expenses Claim</p>
        </div>
        <p class="text-xl text-blue-500"><i class="ri-arrow-down-s-line"></i></p>
      </button>
      <div id="expensesMenu" class="hidden pl-6">
        <div class="flex items-center">
          
          <!-- Labels -->
          <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 bg-gradient-to-b from-blue-600 to-teal-400 rounded-full"></div>
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
              <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Expense 2</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>


  <!-- Other Menu -->
  <div class="mb-6 space-y-8 w-5/6 pt-4">
    <h2 class="text-[#00000080] font-bold text-2xl mb-4 nunito-">OTHER MENU</h2>
    <ul class="w-full space-y-8">
      <li>
        <button class="flex items-center space-x-2 text-gray-600 hover:text-blue-500 w-full focus:outline-none" onclick="toggleMenu('attendanceMenu'); toggleGradientText3()">
        <div class="w-full flex space-x-4 items-center">
        <p><i class="ri-user-fill"></i></p>
        <p id="AttendanceText" class="text-xl font-bold text-black cursor-pointer transition-all duration-300 nunito-">Attendance</p>
        </div>
        <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        
        <div id="attendanceMenu" class="flex items-center hidden">
    <!-- Timeline -->
    <div class="flex flex-col items-center">
      <div class="w-2 h-2 bg-gradient-to-b from-blue-600 to-teal-400 rounded-full"></div>
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
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Salary Components</a>
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Processing Details</a>
        <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Reports</a>
      </div>
    </div>
  </div>
      </li>
      <li>
        <button class="flex justify-between items-center space-x-2 text-gray-600 hover:text-blue-500 w-full focus:outline-none" onclick="toggleMenu('leavesMenu'); toggleGradientText4()">
        <div class="w-full flex space-x-4 items-center">
        <p><i class="ri-user-fill"></i></p>
        <p id="LeaveText" class="text-xl font-bold text-black cursor-pointer transition-all duration-300 nunito-">Leave</p>
            </div>
        <p class="text-xl text-black"><i class="ri-arrow-down-s-line"></i></p>
        </button>
        <ul id="leavesMenu" class="hidden pl-6 space-y-2">
        <div class="flex items-center">
            <!-- Timeline -->
            <div class="flex flex-col items-center">
              <div class="w-2 h-2 bg-gradient-to-b from-blue-600 to-teal-400 rounded-full"></div>
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
              <a href="#" class="text-black hover:text-blue-500 font-medium nunito-">Expense 2</a>
              </div>
            </div>
          </div>
          
        </ul>
      </li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><p><i class="ri-user-fill"></i></p>
      <span id="Incident" class="text-xl text-black font-bold nunito-">Incident</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><p><i class="ri-user-fill"></i></p>
      <span class="text-xl text-black font-bold nunito-">Jobs</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500"><p><i class="ri-user-fill"></i></p>
      <span class="text-xl text-black font-bold nunito-">Company Structure</span></a></li>
    </ul>
  </div>

  <!-- Settings and Help -->
  <div class="mt-auto space-y-8 w-5/6">
    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
    <p><i class="ri-user-fill"></i></p>
    <span class="text-xl text-black font-bold nunito-">Settings</span>
    </a>
    <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-blue-500">
    <p><i class="ri-user-fill"></i></p>
    <span class="text-xl text-black font-bold nunito-">Help & Center</span>
    </a>
  </div>
</div>
<div class="w-full flex flex-col justify-start items-start px-16">
<div class="w-full flex space-y-2 space-x-8 border-b-2 border-[#00000080] pb-8 pl-8 pt-8">
  <div class="w-5/6 flex">
  <input id="input-field" type="text" placeholder="Search employee here" class="w-full px-4 py-2 border-2 border-[#00000080] text-2xl text-[#00000080] rounded-xl"/>
  </div>
    <div class="w-20 p-4 rounded-full flex justify-center items-center border-2 border-black">
      <p class="text-3xl"><i class="ri-notification-4-line"></i></p>
    </div>
    <div class="w-20 rounded-full flex justify-center items-center border-2 border-black">
      <img src="./assetes/image/bg1.png" class="w-8 h-12 object-cover">
    </div>
    <div class="w-20 flex justify-center items-center">
    <p class="text-3xl"><i class="ri-arrow-down-s-fill"></i></p>
    </div>
</div>
<div class="w-full pt-8">
  <div class="w-full flex justify-between items-center">
    <div class=" flex">
    <p class="text-6xl nunito- text-black font-bold">EMPLOYEE</p>
    </div>
    <div class="flex space-x-4 items-center">
    <!-- Filter Button -->
    <button class="flex items-center justify-between w-1/3 px-4 py-2 text-[#00000066] text-2xl bg-[#D9D9D980] border-2 border-[#D9D9D980] rounded-md hover:bg-gray-200">
        <p class="text-3xl"><i class="ri-filter-2-line"></i></p>
        <span>Filter</span>
        <p class="text-3xl text-[#00000066]"><i class="ri-arrow-down-s-line"></i></p>
    </button>

    <!-- Add Employee Button -->
    <button class="flex items-center justify-center space-x-2 px-8 py-2 text-white text-2xl bg-gradient-to-r from-[#184E77] to-[#52B69A] rounded-xl shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
        <p class="text-3xl"><i class="ri-add-fill"></i></p>
        <span>Add Employee</span>
    </button>
    </div>

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

<div class="w-full grid grid-cols-1 md:grid-cols-4 gap-8 items-center pt-8 pb-8">
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
  <div class="border-2 border-[#00000066] p-8 space-y-4 rounded-3xl">
    <div class="w-full flex justify-center items-center">
      <div class="w-1/2 flex justify-start items-center">
        <img src="./assetes/image/bg1.png" class="w-32 h-32 rounded-full">
      </div>
      <div class="w-1/2 flex flex-col justify-center items-center space-y-8 pt-4">
        <div class="w-full h-1/2 flex justify-center items-center">
        <span class="px-6 py-1 text-sm font-medium text-[#47B439] bg-[#47B43980] border border-[#47B439] rounded-xl">
        Active
        </span>
        </div>
        <div class="w-full h-1/2 flex flex-col justify-start items-center">
        <p class=" text-[#00000080] nunito-">Employee ID</p>
        <p class="text-black nunito-">23456709</p>
        </div>
      </div>
    </div>
    <div class="w-full flex flex-col space-y-2 pt-4">
      <p class="text-5xl text-black nunito- font-bold">Jenny Wilson</p>
      <p class="text-3xl nunito- text-[#00000080] font-bold">UI/UX Designer</p>
    </div>
    <div class="w-full flex justify-between items-center">
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Department</p>
        <p class="text-xl nunito- text-black font-bold">Design Team</p>
      </div>
      <div class="w-full flex flex-col">
        <p class="text-xl nunito- text-[#00000080] font-bold">Hired Date </p>
        <p class="text-xl nunito- text-black font-bold">27 / 09 / 2023</p>
      </div>

    </div>
    <div class="w-full flex flex-col justify-start items-start space-y-4">
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-mail-line"></i></p>
        </div>
      <p class="text-black font-bold nunito-">userhumanresources@gmail.com</p>
      </div>
      <div class="w-full flex justify-start items-center space-x-2">
      <div class="w-8 h-8 flex justify-center items-center border border-black rounded-full p-1">
        <p class="text-xl"><i class="ri-phone-line"></i></p>
        </div>
        <p class="text-black font-bold nunito-">+94 77 445 9536</p>
      </div>
    </div>
  </div>
</div>
<div>
  
</div>
<div class="w-full flex items-center justify-end space-x-4">
  <!-- Previous Button -->
  <button class="flex items-center px-2 py-1 text-gray-500 hover:text-black focus:outline-none">
    <i class="ri-arrow-left-s-line"></i>
    <span class="ml-1">Prev</span>
  </button>

  <!-- Page Numbers -->
  <div class="flex items-center space-x-2">
    <button class="w-8 h-8 rounded-full bg-teal-200 text-black font-bold flex items-center justify-center focus:outline-none">1</button>
    <button class="w-8 h-8 rounded-full text-black hover:bg-gray-200 flex items-center justify-center focus:outline-none">2</button>
    <button class="w-8 h-8 rounded-full text-black hover:bg-gray-200 flex items-center justify-center focus:outline-none">3</button>
    <button class="w-8 h-8 rounded-full text-black hover:bg-gray-200 flex items-center justify-center focus:outline-none">4</button>
  </div>

  <!-- Next Button -->
  <button class="flex items-center px-2 py-1 text-gray-500 hover:text-black focus:outline-none">
    <span class="mr-1">Next</span>
    <i class="ri-arrow-right-s-line"></i>
  </button>
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
  function toggleGradientText1() {
    const textElement = document.getElementById('EmployeeText');
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
  function toggleGradientText2() {
    const textElement = document.getElementById('ExpensesText');
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
  function toggleGradientText3() {
    const textElement = document.getElementById('AttendanceText');
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
  function toggleGradientText4() {
    const textElement = document.getElementById('LeaveText');
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

const textElements1 = document.querySelectorAll('span.text-xl');

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
const textElements2 = document.querySelectorAll('span.text-xl');

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

const textElements3 = document.querySelectorAll('span.text-xl');

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
  
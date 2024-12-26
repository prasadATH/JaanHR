@extends('layouts.dashboard-layout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


@section('title', 'Attendance Management')

@section('content')
<!--edit modal start -->
<!-- Edit Modal -->
<div class="modal fade" id="editAttendanceModal" tabindex="-1" aria-hidden="true" data-bs-keyboard="false">
<button type="button" class="btn-close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>

  <div class="modal-dialog modal-dialog-centered " style="padding: 0;">
    <div class="rounded-3xl" style="padding-top: 0;" id="editAttendanceContent">
      <!-- Close Button -->
      <!-- Dynamically loaded content will be injected here -->
      <div class="text-center py-4">
        <p>Loading...</p>
      </div>
    </div>
  </div>
</div>



<!--edit modal end -->


<div class="flex flex-col items-start justify-start w-full px-16">

<div class="w-full pt-8">
  <div class="flex items-center justify-between w-full">
    <div class="flex ">
    <p class="text-6xl font-bold text-black nunito-">Attendance</p>
    </div>
    <div class="flex items-center space-x-4">


    <!-- Filter Button -->
    <button class="flex items-center justify-between px-4 py-2 text-[#00000066] text-2xl bg-[#D9D9D980] border-2 border-[#D9D9D980] rounded-md hover:bg-gray-200">
        <p class="text-3xl"><i class="ri-filter-2-line"></i></p>
        <span>Filter</span>
        <p class="text-3xl text-[#00000066]"><i class="ri-arrow-down-s-line"></i></p>
    </button>

    <!-- Add record Button -->
    <button class="flex items-center justify-center nunito- space-x-2 px-8 py-2 text-white text-2xl bg-gradient-to-r from-[#184E77] to-[#52B69A] rounded-xl shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
    <p class="text-3xl"><i class="ri-add-fill"></i></p>
        <a href="#" 
        onclick="openAddModal()">Add Record</a>

    </button>
    
    </div>



  </div>
  <div class="w-1/5 align-right flex items-right justify-center nunito- space-x-2 px-8 py-2 text-white text-2xl bg-gradient-to-r from-[#184E77] to-[#52B69A] rounded-xl shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
    <button id="print-table">
        Print Records
    </button>
</div>
</div>
<nav class="flex py-3" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3 nunito-">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-3xl font-medium text-[#00000080] hover:text-blue-600">
      Attendance
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <p class="text-[#00000080] text-3xl"><i class="ri-arrow-right-wide-line"></i></p>
        <a href="#" class="ml-1 font-medium text-[#00000080] text-3xl hover:text-blue-600">Employee Attendance</a>
      </div>
    </li>
  </ol>
</nav>
<div class="w-full flex justify-end items-center">

<div class="relative w-[300px] nunito-">
  <!-- Calendar Button -->
  <button
    id="calendarButton"
    class="flex items-center justify-between w-full px-4 py-2 text-left text-black border-2 border-[#184E77] rounded-xl shadow-sm hover:bg-[#f0f8ff]"
  >
    <div class="flex items-center space-x-4">
      <span class="iconify text-[#184E77]" data-icon="mdi:calendar-outline" style="font-size: 20px;"></span>
      <div>
        <span class="text-sm text-[#184E77]">Select a day</span>
        <p id="selectedDate" class="text-lg font-bold">13.03.2021</p>
      </div>
    </div>
    <span class="iconify text-black" data-icon="mdi:chevron-down"></span>
  </button>

  <!-- Hidden Input for Flatpickr -->
  <input
    id="calendarInput"
    type="text"
    class="absolute z-10 opacity-0 pointer-events-none"
  />
</div>

</div>
<div class="flex w-1/3 align-left">
  <input id="custom-search-input" type="text" placeholder="Search record here" class="w-full px-4 py-2 border-2 border-[#00000080] text-2xl text-[#00000080] rounded-xl"/>
  </div>
<table class="w-full nunito- border-separate" style="border-spacing: 0 12px; width: 100%;" id="attendance-table">
  <thead class="w-full">
    <tr class="bg-white">
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">Employee</th>
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">Date</th>
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">Check In & Out</th>
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">Total Work hours</th>
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">O/T hours</th>
      <th class="text-xl text-black font-bold px-4 py-2 text-left align-middle">Late By</th>
      <th class="text-xl w-1/2 text-black font-bold px-4 py-2 text-center align-left hidden">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($attendance as $record)
  <tr class="hover:shadow-popup hover:rounded-xl hover:scale-101 hover:bg-white transition duration-300 hover:border-r-4 hover:border-b-4 hover:border-gray-500"
>
  <td class="text-xl text-black px-4 py-2 text-left align-middle bg-[#D9D9D966] rounded-l-xl font-bold">
  {{ $record->employee->first_name }} {{ $record->employee->last_name }}
        <p class="text-sm">{{ $record->employee->id }}</p>
  </td>
  <td class="text-xl text-black px-4 py-2 text-left align-middle bg-[#D9D9D966]">
  {{ $record->date }}
  </td>
  <td class="text-xl text-black px-4 py-2 text-left align-middle bg-[#D9D9D966] font-bold">
  <span class="text-[#EB5E12]">{{ $record->clock_in_time }}</span>------<span class="text-[#FFBF00]"> {{ $record->clock_out_time }}</span>
  </td>
  <td class="text-xl text-black px-4 py-2 text-left align-middle bg-[#D9D9D966]">
  {{ $record->total_work_hours }}
  </td>
  <td class="text-xl text-black px-4 py-2 text-left align-middle bg-[#D9D9D966]">
  {{ $record->overtime_hours }}
  </td>
  <td class="text-xl text-[#3569C3] px-4 py-2 text-left align-middle bg-[#D9D9D966]">
  {{ $record->late_by }}
  </td>
  <td class="text-left align-left  bg-[#D9D9D966] rounded-r-xl">
  <div class="relative">
    <!-- Trigger Button -->
    <button class="p-2 rounded hover:bg-gray-300" onclick="toggleDropdown(this)">
        <span class="iconify" data-icon="qlementine-icons:menu-dots-16" style="width: 16px; height: 16px;"></span>
    </button>

    <!-- Dropdown Menu -->
    <div class="hidden absolute right-0 mt-2 w-38 bg-white border border-gray-200 rounded-md shadow-lg z-10">

        <a 
class="block px-4 py-2 text-gray-800 hover:bg-gray-100"  onclick="openViewModal({
        employeeName: '{{ $record->employee->first_name }} {{ $record->employee->last_name }}',
        employeeId: '{{ $record->id }}',
        checkIn: '{{ $record->clock_in_time }}',
        checkOut: '{{ $record->clock_out_time }}',
        totalWorkHours: '{{ $record->total_work_hours }}',
        overtimeHours: '{{ $record->overtime_hours }}',
        lateBy: '{{ $record->late_by }}',
        date: '{{ $record->date }}'
    })">
    View
</a>
    <a 
class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
onclick="openEditModal({{ $record->id }})">
    Edit
</a>
        <form  method="POST" class="block">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full text-center px-4 py-2 text-[#FF0000] border-2 border-[#FF0000] bg-[#FF000033] rounded-md ">
    Delete
</button>

        </form>
    </div>
</div>

  </td>
</tr>
@endforeach
  </tbody>
</table>


<div class="flex items-center justify-end w-full space-x-4 mt-8">
  <!-- Previous Button -->
  <button class="flex items-center px-2 py-1 text-gray-500 hover:text-black focus:outline-none">
    <i class="ri-arrow-left-s-line"></i>
    <span class="ml-1">Prev</span>
  </button>

  <!-- Page Numbers -->
  <div class="flex items-center space-x-2">
    <button class="flex items-center justify-center w-8 h-8 font-bold text-black bg-[#52B69A80] rounded-full focus:outline-none">1</button>
    <button class="flex items-center justify-center w-8 h-8 text-black rounded-full hover:bg-gray-200 focus:outline-none">2</button>
    <button class="flex items-center justify-center w-8 h-8 text-black rounded-full hover:bg-gray-200 focus:outline-none">3</button>
    <button class="flex items-center justify-center w-8 h-8 text-black rounded-full hover:bg-gray-200 focus:outline-none">4</button>
  </div>

  <!-- Next Button -->
  <button class="flex items-center px-2 py-1 text-gray-500 hover:text-black focus:outline-none">
    <span class="mr-1">Next</span>
    <i class="ri-arrow-right-s-line"></i>
  </button>
</div>
</div>


<!--View record form start-->
<div id="view-attendance-modal-container" class=" fixed inset-0 bg-black bg-opacity-50 w-full opacity-0 transition-opacity duration-300 flex justify-center items-center hidden z-50">

<div class="w-full flex justify-center items-center rounded-3xl">
  <!-- Close Button -->
  <div id="modal-container" class="w-1/3 flex flex-col justify-start items-center relative bg-white nunito- p-2 rounded-3xl bg-gradient-to-r from-[#184E77] to-[#52B69A]">
    <button onclick="closeAddNewModal()" id="close-button" class="absolute top-4 right-4 text-black font-medium rounded-full text-xl p-4 inline-flex items-center">
        <span class="iconify" data-icon="ic:baseline-close" style="width: 16px; height: 16px;"></span>
    </button>
    <div class="w-full flex flex-col justify-start items-center bg-white p-8 rounded-3xl space-y-8">
      <div class="flex flex-col justify-center items-center space-y-4">
        <p class="text-5xl text-black font-bold">Attendance</p>
        <p class="text-3xl text-[#00000080]">Enter the Information about Incidents</p>
      </div>
        <div class="w-full flex mx-auto pb-8 pt-8 px-16">
            <div class="w-1/2 flex flex-col space-y-8">
                <!-- Employee ID -->
            <p class="text-xl font-bold text-black">Employee Name :</p>
            <p class="text-xl font-bold text-black">Employee ID :</p>
            <p class="text-xl font-bold text-black">Check In Time :</p>
            <p class="text-xl font-bold text-black">Check Out Time :</p>
            <p class="text-xl font-bold text-black">Total Work Hours :</p>
            <p class="text-xl font-bold text-black">O/T Hours :</p>
            <p class="text-xl font-bold text-black">Late By : </p>
            <p class="text-xl font-bold text-black">Date :</p>
            </div>
            <div class="w-1/2 flex flex-col space-y-8">
            <p class="text-xl font-bold text-black modal-employee-name"></p>
<p class="text-xl font-bold text-black modal-employee-id"></p>
<p class="text-xl font-bold text-black modal-check-in"></p>
<p class="text-xl font-bold text-black modal-check-out"></p>
<p class="text-xl font-bold text-black modal-total-work-hours"></p>
<p class="text-xl font-bold text-black modal-overtime-hours"></p>
<p class="text-xl font-bold text-black modal-late-by"></p>
<p class="text-xl font-bold text-black modal-date"></p>


            </div>
          
        </div>
        <!-- Submit Button -->
        <div class="w-full text-center px-16">
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-[#184E77] to-[#52B69A] text-xl text-white font-bold py-4 px-4 rounded-xl hover:from-blue-600 hover:to-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
          >
          Done
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--View record form end-->

<script>

function openEditModal(attendanceId) {
    const modal = new bootstrap.Modal(document.getElementById('editAttendanceModal'));
    modal.show();

    const modalContent = document.getElementById('editAttendanceContent');
    modalContent.innerHTML = '<div class="text-center "><p>Loading...</p></div>';

    // Fetch content from the server
    fetch(`http://127.0.0.1:8000/dashboard/attendance/${attendanceId}/edit`)
      .then(response => response.text())
      .then(html => {
        modalContent.innerHTML = html;
      })
      .catch(error => {
        modalContent.innerHTML = '<div class="text-center py-4 text-danger"><p>Error loading content. Please try again later.</p></div>';
        console.error('Error:', error);
      });
  }// Attendance Management Routes

  function openAddModal() {
    const modal = new bootstrap.Modal(document.getElementById('editAttendanceModal'));
    modal.show();

    const modalContent = document.getElementById('editAttendanceContent');
    modalContent.innerHTML = '<div class="text-center "><p>Loading...</p></div>';
    $('#editAttendanceModal').on('shown.bs.modal', function () {
  // Ensure inputs inside the modal are editable
  $('#editAttendanceContent input').prop('disabled', false);
});
    // Fetch content from the server
    fetch(`http://127.0.0.1:8000/dashboard/attendance/create`)
      .then(response => response.text())
      .then(html => {
        modalContent.innerHTML = html;
      })
      .catch(error => {
        modalContent.innerHTML = '<div class="text-center py-4 text-danger"><p>Error loading content. Please try again later.</p></div>';
        console.error('Error:', error);
      });
  }// Attendance Management Routes

function formatDuration(seconds) {
    // Calculate hours, minutes, and seconds
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const remainingSeconds = seconds % 60;

    // Format as HH:MM:SS
    return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
}

   function toggleDropdown(button) {
    const dropdown = button.nextElementSibling; // Find the next sibling element (dropdown menu)
    dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
}

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
// Initialize Flatpickr
$(document).ready(function () {
    // Initialize DataTable
    var table = $('#attendance-table').DataTable({
      dom: '<"top">rt<"bottom"p><"clear">', // Custom layout: search box on top, pagination on bottom
    paging: true,
    searching: true,
        buttons: [
            {
                extend: 'print',
                text: 'Print Table',
                title: 'Attendance Report', // Optional title
                exportOptions: {
                    columns: ':visible', // Export all visible columns
                }
            }
        ],
        paging: true, // Enable pagination
    });

    // Attach Print functionality to the custom button
    $('#print-table').on('click', function () {
        table.button('.buttons-print').trigger(); // Trigger the print button
    });

// Attach a keyup event listener to the custom search input element
$('#custom-search-input').on('keyup', function () {
    const searchTerm = $(this).val(); // Get the value of the search input
    table.search(searchTerm).draw(); // Trigger the DataTable search with the entered term
});

    // Initialize Flatpickr for Date Selection
    const calendarInput = document.getElementById("calendarInput");
    const selectedDate = document.getElementById("selectedDate");
    const calendarButton = document.getElementById("calendarButton");

    flatpickr(calendarInput, {
        dateFormat: "Y-m-d",
        onChange: function (selectedDates, dateStr) {
            selectedDate.textContent = dateStr;
            // Filter DataTable by selected date
            table.search(dateStr).draw();
        },
    });

    calendarButton.addEventListener("click", () => {
        calendarInput._flatpickr.open();
    });
});

function openAddNewModal() {
  const modal = document.getElementById('view-attendance-modal-container');
  modal.classList.remove('hidden'); // Make visible
  setTimeout(() => {
    modal.classList.remove('opacity-0', 'scale-95'); // Apply transition effects
  }, 10);
}

function closeAddNewModal() {
  const modal = document.getElementById('view-attendance-modal-container');
  modal.classList.add('opacity-0', 'scale-95'); // Apply transition effects
  setTimeout(() => {
    modal.classList.add('hidden'); // Hide modal after transition
  }, 300); // Match the transition duration
}


function openViewModal(data) {
    // Populate modal fields with the passed data
    document.querySelector('#view-attendance-modal-container .modal-employee-name').textContent = data.employeeName;
    document.querySelector('#view-attendance-modal-container .modal-employee-id').textContent = data.employeeId;
    document.querySelector('#view-attendance-modal-container .modal-check-in').textContent = data.checkIn;
    document.querySelector('#view-attendance-modal-container .modal-check-out').textContent = data.checkOut;
    document.querySelector('#view-attendance-modal-container .modal-total-work-hours').textContent = data.totalWorkHours;
    document.querySelector('#view-attendance-modal-container .modal-overtime-hours').textContent = data.overtimeHours;
    document.querySelector('#view-attendance-modal-container .modal-late-by').textContent = data.lateBy;
    document.querySelector('#view-attendance-modal-container .modal-date').textContent = data.date;

    // Show the modal
    const modal = document.getElementById('view-attendance-modal-container');
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0', 'scale-95');
    }, 10);
}

</script>
  
  
@endsection

<?php include("./includes/header.php"); ?>
<div class="w-full h-screen flex justify-center items-center">
<div class="w-full flex justify-center items-center rounded-3xl">
  <!-- Close Button -->
  <div id="modal-container" class="w-1/3 flex flex-col justify-start items-center relative bg-white nunito- p-2 rounded-3xl bg-gradient-to-r from-[#184E77] to-[#52B69A]">
    <button id="close-button" class="absolute top-4 right-4 text-black font-medium rounded-full text-xl p-4 inline-flex items-center">
        <span class="iconify" data-icon="ic:baseline-close" style="width: 16px; height: 16px;"></span>
    </button>
    <div class="w-full flex flex-col justify-start items-center bg-white p-8 rounded-3xl space-y-8">
      <div class="flex flex-col justify-center items-center space-y-4">
        <p class="text-5xl text-black font-bold">Attendance</p>
        <p class="text-3xl text-[#00000080]">Enter the Information about Expenses</p>
      </div>
      <div class="w-full mx-auto p-6 ">
        <div class="grid grid-cols-2 gap-4">
          <!-- Employee ID -->
          <div>
            <label for="employee-id" class="block text-xl text-black font-bold">Employee Name :</label>
            <input
              type="text"
              id="employee-id"
              placeholder="Enter your Employee ID"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

          <!-- Claim Date -->
          <div>
            <label for="claim-date" class="block text-xl text-black font-bold">Employee ID :</label>
            <input
              type="text"
              id="employee-id"
              placeholder="Enter the date here"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

          <!-- Amount -->
          <div>
            <label for="amount" class="block text-xl text-black font-bold">Check In Time</label>
            <input
              type="number"
              id="amount"
              placeholder="Enter the Amount"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

          <!-- Status -->
          <div>
            <label for="status" class="block text-xl text-black font-bold">Check Out Time</label>
            <input
              type="text"
              id="status"
              placeholder="Enter the Status"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

          <!-- Approved By -->
          <div>
            <label for="approved-by" class="block text-xl text-black font-bold">Total Work Hour</label>
            <input
              type="text"
              id="approved-by"
              placeholder="Enter the name"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

          <!-- Supporting Document -->
          <div>
            <label for="approved-by" class="block text-xl text-black font-bold">O/T Hours</label>
            <input
              type="text"
              id="approved-by"
              placeholder="Attach the PDF here"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>
          <div>
            <label for="approved-by" class="block text-xl text-black font-bold">Late By :</label>
            <input
              type="text"
              id="approved-by"
              placeholder="Enter the name"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>
          <div>
            <label for="approved-by" class="block text-xl text-black font-bold">Date :</label>
            <input
              type="text"
              id="approved-by"
              placeholder="Enter the name"
              class="mt-1 block w-full px-3 py-2 border-2 border-[#1C1B1F80] rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
          </div>

        <!-- Submit Button -->
        <div class="mt-6 col-span-2 flex justify-center">
      <button
        type="submit"
        class="w-1/2 bg-gradient-to-r from-[#184E77] to-[#52B69A] text-white font-medium px-6 py-2 rounded-md hover:from-blue-600 hover:to-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
      >
        Add Expense
      </button>
    </div>
      </div>
    </div>
  </div>
</div>
</div>

<style>
  input::placeholder,
  textarea::placeholder {
    color: #0000008C;
    opacity: 1;
  }
</style>
<script>
  // Close button functionality
  document.getElementById('close-button').addEventListener('click', function () {
    document.getElementById('modal-container').style.display = 'none';
  });
</script>

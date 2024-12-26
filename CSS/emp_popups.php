<?php include("./includes/header.php"); ?>
<div class="w-full flex justify-center items-center pt-8 pb-8 p-1 rounded-3xl">
  <div class="w-1/3 flex flex-col justify-start items-center bg-[#D9D9D9] nunito- p-2 rounded-3xl space-y-8 bg-gradient-to-r from-[#184E77] to-[#52B69A]">
    <div class="w-full flex flex-col justify-start items-center bg-[#D9D9D9] p-8 rounded-3xl space-y-8 ">
    <div class="flex flex-col justify-center items-center space-y-4">
      <p class="text-5xl text-black font-bold">Upload an Image</p>
      <p class="text-3xl text-[#00000080]">Upload an image of the Employee</p>
    </div>
    <div class="flex flex-col justify-center items-center border-dashed border-2 border-[#184E77] rounded-xl p-8 space-y-2">
      <p class="text-5xl"><i class="ri-image-line"></i></p>
      <p class="text-xl text-black font-bold">Drag and Drop the image to upload</p>
      <div class="w-full flex flex-col justify-center items-center">
        <p>Your image will be private until you</p>
        <p>publish your image.</p>
      </div>
      <button class="flex items-center justify-center space-x-2 px-10 py-2 text-[#184E77] text-2xl rounded-xl border-2 border-[#184E77] shadow-sm hover:from-[#1B5A8A] hover:to-[#60C3A8]">
        <span>Select image</span>
      </button>
    </div>
    </div>
  </div>
</div>

<?php
require 'db_conn.php';

if(isset($_POST["submit"])){
    $year_lvl = $_POST['year_lvl'];
    $program= $_POST['program'];
    $first_n = $_POST['first_n'];
    $mid_n = $_POST['mid_n'];
    $last_n = $_POST['last_n']; 
    $sex = $_POST['sex'];
    $bday = $_POST['bday'];
    $civstatus = $_POST['civstatus'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $religion = $_POST['religion'];
    $street = $_POST['street']; 
    $country = $_POST['country']; 
    $province = $_POST['province']; 
    $municipality = $_POST['municipality']; 
    $barangay = $_POST['barangay']; 
    $zip_code = $_POST['zip_code']; 
    $elem_school = $_POST['elem_school'];
    $jh_school = $_POST['jh_school'];
    $sh_school = $_POST['sh_school'];
    $vocational = $_POST['vocational']; 
    $college_trans = $_POST['college_trans'];


  $query = "INSERT INTO enrollees (year_lvl, program, first_n, mid_n, last_n, sex, bday, civstatus, contactno, email, religion, street, country, province, municipality, barangay, zip_code, elem_school, jh_school, sh_school, vocational, college_trans) 
  VALUES ('$year_lvl','$program','$first_n','$mid_n','$last_n', '$sex', '$bday', '$civstatus', '$contactno', '$email', '$religion', '$street', '$country', '$province', '$municipality', '$barangay', '$zip_code', '$elem_school', '$jh_school', '$sh_school', '$vocational','$college_trans')";


  mysqli_query($conn,$query);
  ?><script type = "text/javascript">alert("Keep in mind that your request is subject to assessment, and approval is not guaranteed.");



window.location.href="student_home.html";
</script><?php







  //header("location: formrequest.html");
}
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admission</title>
    <link rel="icon" type="image/x-icon" href="images/papsicon.png" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="modal.css">
    
  </head>
  <body
    class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]"
  >
    <div class="flex flex-col items-stretch pl-12 pr-12 max-md:px-5">
      <header>
        <nav
          class="flex w-full items-center justify-between gap-20 mt-10 max-md:max-w-full max-md:flex-wrap"
        >
          <a
            href="Student_Home.html"
            class="flex items-stretch justify-between gap-5 my-auto max-md:max-w-full max-md:flex-wrap max-md:justify-center"
          >
            <img
              loading="lazy"
              srcset="
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=100   100w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=200   200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=400   400w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=800   800w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=1200 1200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=1600 1600w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=2000 2000w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&
              "
              class="aspect-[4.09] object-contain object-center w-[143px] overflow-hidden shrink-0 max-w-full"
              alt="Logo"
            />
            <div
              class="justify-center self-start flex gap-10 my-auto max-md:max-w-full max-md:flex-wrap max-md:justify-center"
            >
              <a
                href="Student_Home.html"
                class="text-stone-900 text-center text-base font-medium leading-5"
                >Home</a
              >
              <a
                href="formrequest.html"
                class="text-black text-center text-base font-extrabold leading-5"
                >Form Request</a
              >
              <a
                href="Students_Programs.html"
                class="text-black text-center text-base font-medium leading-5"
                >Programs</a
              >
              <a
                href="Students_About.html"
                class="text-black text-center text-base font-medium leading-5 whitespace-nowrap"
                >About</a
              >
            </div>
          </a>
         
        </nav>
      </header>
          <h1
            class="text-orange-950 text-4xl font-extrabold leading-[54px] w-[1012px] ml-4 mt-20 max-md:max-w-full max-md:mt-10"
          >
          Application Form For Admission
          </h1>
      <div class="pr-12 pl-4">
      <div class="text-orange-950 text-lg leading-8 w-full ml-4 mr-5 mt-6 max-md:max-w-full">
              Welcome to the MAMS Enrollment Form! This quick and easy form is your ticket
              to joining our dynamic academic community. Please fill it out accurately and
              thoroughly to ensure a smooth enrollment process. If you have any questions
              or need assistance, our support team is here to help. Thank you for choosing
              MAMS—we're excited to have you on board!
            </div>
    </div>
    <div>
      <form class="" method="post" autocomplete="off">
      <section>
        <div class="flex flex-col items-stretch px-5">
          <div
            class="justify-center items-stretch bg-slate-300 flex w-full flex-col -mr-5 mt-12 px-7 py-8 rounded-[30px] max-md:max-w-full max-md:mt-10 max-md:px-5"
          >
            <div class="justify-between max-md:max-w-full">
              
            <div
                class="text-black text-lg font-extrabold leading-6 whitespace-nowrap mb-5 max-md:max-w-full"
              >
                Admission at Manila Academy for Mathematics and Sciences
              </div>
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >


                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yearlvl"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year level</label
                    >
                    <div
                      class="w-88 relative"
                    >
                      <select
                        type="text"
                        id="year_lvl"
                        name="year_lvl"
                        placeholder="Year level"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"                        autocomplete="off"
                        >
                        <option value=" "> </option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                      
                      
                      </select>

                      <div
                        id="dropdown_yr_lvl"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>
                
                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="program"
                      class="text-[#401b1b] text-base font-extrabold leading-6 whitespace-nowrap"
                      >Program</label
                    >
                    <div
                      class="w-88 relative"
                      
                    >
                      <input
                        type="text"
                        id="program"
                        name="program"
                        placeholder="e.g. BS Computer Science"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                        onkeyup="onkeyUp(event)"
                        autocomplete="off"
                      />
                      <div
                        id="dropdown"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>

                

              </div>
            </div>

            <div
                class="text-black text-lg font-extrabold leading-6 whitespace-nowrap mt-10 mb-3 max-md:max-w-full"
              >
                Personal Information
              </div>
<!--1st Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="fname"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >First Name</label
                    >

                    <input
                      id="first_n"
                      name="first_n"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Juan"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="mname"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Middle Name (If applicable)</label
                    >
                    <input
                      id="mid_n"
                      name="mid_n"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Gregorio"
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="lname"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Last Name</label
                    >

                    <input
                      type="text"
                      id="last_n"
                      name="last_n"
                      placeholder="e.g. Dela Cruz"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>


<!--2nd Line-->
              
            
              <!--Sex-->
            <div class="justify-between mt-10 max-md:max-w-full">
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="sex"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Sex</label
                    >

                    <div
                      class="w-88 relative"
                    >
                      <select
                        type="text"
                        id="sex"
                        name="sex"
                        placeholder="Sex"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"                        autocomplete="off"
                        >
                        <option value=" "> </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="ayoko">Rather not say</option>
                      </select>

                      <div
                        id="dropdown_sex"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>
                <!--end--Sex-->

                <!--Date of Birth-->
                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="dob"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Date of Birth</label
                    >
                    <input
                      type="date"
                      id="bday"
                      name="bday"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="Date of Birth"
                      required
                    />
                  </div>
                </div>
                <!--End--Date of Birth-->

                <!--Religion-->
                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                    <div class="items-stretch flex grow flex-col max-md:mt-10">
                      <label
                        for="religion"
                        class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                        >Religion</label
                      >

                      <input
                        type="text"
                        id="religion"
                        name="religion"
                        placeholder="e.g. Roman Catholic"
                        required
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      />
                    </div>
                  </div>
                </div>
                <!--End-Religion-->
                
                
              </div><!--div-end-line-->

<!--3rd Line-->
              <!--Civil Status-->
            <div class="justify-between mt-10 max-md:max-w-full">
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="sex"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Civil Status</label
                    >

                    <div
                      class="w-88 relative"
                    >
                      <select
                        type="text"
                        id="civstatus"
                        name="civstatus"
                        placeholder="e.g. Single"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"                        autocomplete="off"
                        >
                        <option value=" "> </option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="byuda">Widowed</option>
                        <option value="inayawan">Divorced</option>
                      </select>

                      <div
                        id="dropdown_civstatus"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>
                <!--end--Sex-->


                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="number"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Contact Number</label
                    >
                    <input
                      id="contactno"
                      name="contactno"

                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="0912 345 6789"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="lemail"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Email Address</label
                    >

                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder="example@gmail.com"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>
<!--END OF PERSONAL INFORMATION-->


<!--PERMANENT ADDRESS-->
              <div
                class="text-black text-lg font-extrabold leading-6 whitespace-nowrap mt-10 mb-3 max-md:max-w-full"
              >
                Permanent Address
              </div>
<!--1st Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="fname"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Street</label
                    >

                    <input
                      id="street"
                      name="street"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Block 123 Lot 11"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="brgy"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Barangay</label
                    >
                    <input
                      id="barangay"
                      name="barangay"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Molino"   
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="municipality"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Municipality</label
                    >

                    <input
                      type="text"
                      id="municipality"
                      name="municipality"
                      placeholder="e.g. Bacoor"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>

<!--2nd Line-->
              <div
                class="gap-5 flex max-md:flex-col mt-10 max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="province"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Province</label
                    >

                    <input
                      id="province"
                      name="province"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Cavite"
                      required
                    />
                  </div>
                </div>

                

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="Country"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Country</label
                    >
                    <input
                      id="country"
                      name="country"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Philippines"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="zip"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Zip Code</label
                    >

                    <input
                      type="text"
                      id="zip_code"
                      name="zip_code"
                      placeholder="e.g. 4114"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>

<!--END OF PERMANENT ADDRESS-->

<!--EDUCATIONAL BACKGROUND-->
              <div
                class="text-black text-lg font-extrabold leading-6 whitespace-nowrap mt-10 mb-3 max-md:max-w-full"
              >
                Educational Background
              </div>

              <div
                class="text-[#401b1b] mt-10 mb-5 text-base font-extrabold leading-6 whitespace-nowrap"
              >
                Elementary
              </div>
<!--1st Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="nameschool"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Name of School</label
                    >

                    <input
                      id="elem_school"
                      name="elem_school"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. MAMS Academy"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="add"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Address</label
                    >
                    <input
                      id="addelem"
                      name="addelem"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Bacoor, Cavite"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yrgrad"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year Graduated</label
                    >

                    <input
                      type="text"
                      id="yrgrad"
                      name="yrgrad"
                      placeholder="e.g. 2015"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>

              <div
                class="text-[#401b1b] mt-10 mb-5 text-base font-extrabold leading-6 whitespace-nowrap"
              >
                Junior High School
              </div>

<!--2nd Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="nameschool"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Name of School</label
                    >

                    <input
                      id="jh_school"
                      name="jh_school"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. MAMS Academy"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="add"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Address</label
                    >
                    <input
                      id="addelem"
                      name="addelem"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Bacoor, Cavite"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yrgrad"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year Graduated</label
                    >

                    <input
                      type="text"
                      id="yrgrad"
                      name="yrgrad"
                      placeholder="e.g. 2019"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>

              <div
                class="text-[#401b1b] mt-10 mb-5 text-base font-extrabold leading-6 whitespace-nowrap"
              >
                Senior High School
              </div>

<!--3rd Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="nameschool"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Name of School</label
                    >

                    <input
                      id="sh_school"
                      name="sh_school"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. MAMS Academy"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="add"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Address</label
                    >
                    <input
                      id="addelem"
                      name="addelem"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Bacoor, Cavite"
                      required
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yrgrad"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year Graduated</label
                    >

                    <input
                      type="text"
                      id="yrgrad"
                      name="yrgrad"
                      placeholder="e.g. 2020"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>


              <div
                class="text-[#401b1b] mt-10 mb-5 text-base font-extrabold leading-6 whitespace-nowrap"
              >
                Vocational (If Applicable)
              </div>

<!--3rd Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="nameschool"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Name of School</label
                    >

                    <input
                      id="vocational"
                      name="vocational"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. MAMS Academy"
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="add"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Address</label
                    >
                    <input
                      id="addelem"
                      name="addelem"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Bacoor, Cavite"
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yrgrad"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year Graduated</label
                    >

                    <input
                      type="text"
                      id="yrgrad"
                      name="yrgrad"
                      placeholder="e.g. 2019"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>

              </div>

              <div
                class="text-[#401b1b] mt-10 mb-5 text-base font-extrabold leading-6 whitespace-nowrap"
              >
                College (For transferees)
              </div>

<!--4th Line-->
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col">
                    <label
                      for="nameschool"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Name of School</label
                    >

                    <input
                      id="college_trans"
                      name="college_trans"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. MAMS Academy"
                    />
                  </div>
                </div>

                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="add"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Address</label
                    >
                    <input
                      id="addelem"
                      name="addelem"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="e.g. Bacoor, Cavite"
                    />
                  </div>
                </div>

                

              </div>


<!--END OF PERMANENT ADDRESS-->

            </div>
          </div>
        </div>
      </section>


      <section class="mb-20">
          <section class="mb-20">
            <div class="flex flex-col items-stretch px-16">
              <div
                class="justify-center items-stretch  flex w-full flex-col -mr-5 px-7 mt-12 rounded-[30px] max-md:max-w-full max-md:mt-10 max-md:px-5"
              ><span class="font-extrabold ">PLEASE READ BEFORE PROCEEDING</span> <br />
              
              <div
                class="text-pink-900 text-justify text-lg leading-8 grow shrink basis-auto max-md:max-w-full"
              >
              <span class="font-extrabold">
              I hereby certify that all information stated above is true and correct to the best of my knowledge. 
                  </span><br>
              <form action="/action_page.php">
                <input type="checkbox" id="apply" name="apply" value="apply" required>
                <label for="applynow">By ticking this checkbox...</label>
                  <ul class="list-disc pl-5">
          <li>I willingly provide consent for the processing of my personal data, which is included in my offer, for the purpose of my admission and enrollment in accordance with applicable regulations and policies.</li>
          <li>I understand that the information provided will be used solely for the aforementioned purposes and will be handled in compliance with data protection laws.
                I acknowledge that any false or misleading information may result in the rejection of my application or subsequent disciplinary action.</li>
          <li>By signing this declaration, I affirm my commitment to uphold the standards and policies set forth by the institution and declare my understanding of the implications of providing false information.</li>
          </ul>
              </span>

                </label><br>
              </div>
            </div>
              <button type="submit" name="submit" class="justify-center items-center shadow-2xl bg-[#AC644C] flex w-[244px] max-w-full gap-2 mt-20 px-12 py-7 rounded-[40px] self-center max-md:mt-10 max-md:px-5">
                <h2 class="text-gray-200 text-center text-lg font-extrabold leading-6">Apply Now</h2>
                <a href="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700" class="aspect-square object-contain object-center w-[18px] justify-center items-center overflow-hidden self-center shrink-0 max-w-full my-auto">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700&" alt="" />
                </a>
              </button>
              </div></div>
        </section>
      </form>
      </div>
        </div>
      
      <!--3rd sec-->
        
    
  </body>
  <script src="programs.js"></script>
  <!--<script src="yearsec.js"></script>-->
</html>

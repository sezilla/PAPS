<?php
session_start();


include("db_conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Request for Certificate of Enrollment</title>
    <link rel="icon" type="image/x-icon" href="images/papsicon.png" />
    <link href="/dist/output.css" rel="stylesheet" />
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

      <div class="mt-0 mr-0.5 -mb-0.5 pt-16">

          <section

            class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"

          >

            <div

              class="flex flex-col items-stretch w-[42%] max-md:w-full max-md:ml-0"

            >

              <div

                class="flex flex-col items-stretch mt-20 px-5 max-md:max-w-full max-md:mt-10"

              >
                <h1

                  class="text-red-950 text-4xl font-extrabold mr-5 max-md:max-w-full max-md:text-4xl max-md:leading-[71px]"

                >

                  Request Successfully Sent

                </h1>

                <p

        class="text-orange-950 text-lg leading-8 w-full mr-5 mt-6 max-md:max-w-full"

      >

        <span>Please ensure all required details are accurately provided before submitting your request to the registrar.

        </span></br>

        <span>Once done, entrust the process to us, and your 

        <span class="font-bold">Certificate of Grades</span>

        <span>will be prepared within

        <span class="font-bold">7 working days</span>

        <span>.</span>

      </p>

                <div

                  class="flex items-stretch justify-center gap-5 -mr-5 mt-9 pr-20 max-md:max-w-full max-md:flex-wrap max-md:pr-5"

                >

                  <button class="text-stone-100 text-center w-fit text-lg font-semibold leading-6 whitespace-nowrap bg-[#ab644d] p-4 items-center rounded-xl" 

                  onclick="generateQR()">Generate QR Code</button>

                </div>

              </div>

            </div>



            <!-- component -->

            <!-- This is an example component -->

             <div class="max-w-2xl mx-auto"> 

           

      

    <div class="md:flex md:items-center">

      <p class="text-center mt-5 ml-12 mr-8 mb-7">Here is your 

        <span class="font-extrabold">Control Number</span>

        for your request, which will be used for you to claim your form. Please keep this Control Number and the generated QR code confidential and do not share it with anyone. If you have any inquiries, please feel free to contact the registrar. Thank you!</p>   

    </div>

<?php

                  $sql="SELECT ctrl_num FROM request ORDER BY ctrl_num DESC LIMIT 1;";

                  $result=mysqli_query($conn,$sql);

                  $theone=mysqli_fetch_assoc($result)

                  ?>

                  <div class="flex  justify-center pb-7">

                  <input type="text" class="bg-inherit text-center p-2 border h-[56px] rounded-xl border-solid border-orange-950" value="<?php echo $theone['ctrl_num'];?>"  id="qrText" readonly>

                  

                  <div id="dwld" class="hidden flex justify-center items-center gap-5 ml-6 max-md:max-w-full max-md:flex-wrap max-md:pr-5">

                    <a href="#" download="Control Number" onclick="downloadQR()" class="text-stone-100 text-lg font-semibold leading-6 whitespace-nowrap bg-[#ab644d] p-4 rounded-full shadow-md" onclick="downloadQR()">

                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="m12 16 4-5h-3V4h-2v7H8z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg></a>

                  </div>

                  

                </div>



                  



      <div id="qrImageContainer" class="hidden ">

        <img src="" id="qrImage" class="mx-auto rounded-lg border border-orange-950 p-2 h-[190px] w-[190px]"/>

      </div>



      



    </section>

    </div>

    

    <script src="script.js"></script>



    <script>

      

      let imgBox = document.getElementById("imgBox");

      let qrImage = document.getElementById("qrImage");

      let qrText = document.getElementById("qrText");

      let input = document.querySelector("input");

      let generatebtn = document.querySelector("generate");

      let downloadbtn = document.querySelector("download");

      qrImage.addEventListener("load", () => {

        imgBox.classList.add("border");

      });



      function generateQR() {

        if (qrText.value.length > 0) {

          qrImage.src =

            " https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" +

            qrText.value;

            document.getElementById("qrImageContainer").classList.remove("hidden");

            document.getElementById("dwld").classList.remove("hidden");

          imgBox.classList.add("show-img");

          

        } else {

          qrText.classList.add("error");

          setTimeout(() => {

            qrText.classList.remove("error");

          }, 1000);

        }

      }
      function downloadQR() {
  const qrImage = document.getElementById("qrImage");
  const link = document.createElement("a");
  link.download = "qrcode.png";
  link.href = qrImage.src;
 



}







    </script> 

     

      

    

  </body>

</html>

<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Dashboard</title>
  <?php include 'include/scripts.php'; ?>
</head>

<body>
  <div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class=" ">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <div>
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="index.php">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="img/logo.png">
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button id="btn1" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                <a href="index.php" class="font-medium text-gray-500 hover:text-gray-900">Home</a>

                <a href="about.php" class="font-medium text-gray-500 hover:text-gray-900">About US</a>

                <a href="form.php" class="font-medium text-gray-500 hover:text-gray-900">Entrance Form</a>



                <a href="logout.php" class="font-medium text-indigo-600 hover:text-indigo-500">Log Out</a>
              </div>
            </nav>
          </div>
          <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="../img/logo.png" alt="">
                </div>
                <div class="-mr-2">
                  <button id="btn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About Us</a>

                <a href="form.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Entrance Form</a>


              </div>
              <a href="logout.php" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                Log Out
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>
  <div class="flex flex-col">

    <h1 class=" py-4 text-center text-3xl font-extrabold text-gray-900">
      Admin Dashboard </h1>

    <span class="  px-1 text-center font-medium text-indigo-600 hover:text-indigo-500">
      Welcome <strong><?php echo $_SESSION['username']; ?></strong>
    </span>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  First Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Last Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Father's Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Mother's Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Personal Contact
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Parents Contact
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Class
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Faculty
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Actions
                </th>
              </tr>
            </thead>





            <tbody class="bg-white divide-y divide-gray-200">


              <?php
              include '_dbconnect.php';
              $selectquery = "SELECT * FROM `data`";
              $query = mysqli_query($conn, $selectquery);

              while ($result = mysqli_fetch_assoc($query)) {
              ?>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <?php echo $result['firstname']; ?>

                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['lastname']; ?></div>

                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['fathername']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['mothername']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['personalno']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['parentsno']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['class']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo $result['faculty']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-3 border-b-4 border-green-700 hover:border-green-500 rounded">
                      Update
                    </button>

                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-3 border-b-4 border-red-700 hover:border-red-500 rounded">
                      Delete
                    </button>


                    <!-- <div class="text-sm text-gray-900"><?php echo $result['faculty']; ?></div> -->
                  </td>
                </tr>

              <?php

              }


              ?>

            </tbody>

          </table>

        </div>
      </div>
    </div>
  </div>



</body>

</html>
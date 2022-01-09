<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'include/scripts.php'; ?>
</head>
<body>
    <?php include 'include/navbar.php'; ?>
    <div class="flex flex-col">
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
            </tr>
          </thead>



         
        
          <tbody class="bg-white divide-y divide-gray-200">


          <?php
          include '_dbconnect.php';
          $selectquery = "SELECT * FROM `data`";
          $query = mysqli_query($conn, $selectquery);
         
         while($result = mysqli_fetch_assoc($query)){
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
              </td><td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900"><?php echo $result['faculty']; ?></div>
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

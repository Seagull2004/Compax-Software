<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: ../../error/error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="../../../img/logo.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Admin</title>
</head>

<body class="text-blueGray-700 antialiased">
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root">
    <nav
      class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
      <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
          class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
          type="button" onclick="toggleNavbar('example-collapse-sidebar')">
          <i class="fas fa-bars"></i></button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
          href="javascript:void(0)">
          Compax Software
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
          <li class="inline-block relative">
          </li>
          <li class="inline-block relative">
            <a class="text-blueGray-500 block" href="#pablo">
              <div class="items-center flex">
                <span
                  class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                    alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                    src="../../../img/logo.png" /></span>
              </div>
            </a>
          </li>
        </ul>
        <div
          class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
          id="example-collapse-sidebar">
          <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
            <div class="flex flex-wrap">
              <div class="w-6/12">
                <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                  href="javascript:void(0)">
                  Compax Software
                </a>
              </div>
              <div class="w-6/12 flex justify-end">
                <button type="button"
                  class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                  onclick="toggleNavbar('example-collapse-sidebar')">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </div>
          <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="items-center">
              <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                href="../indexDashboard.php"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                Dashboard</a>
            </li>
            <li class="items-center">
              <a class="text-sky-600 hover:text-sky-600 text-xs uppercase py-3 font-bold block"
                href="domande_risposte_medie.php"><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                Gestisci domande</a>
            </li>
            <li class="items-center">
              <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                href="../risultati/risultati_medie.php"><i
                  class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"></i>
                Risultati</a>
            </li>
            <li class="items-center">
              <a class="text-blueGray-300 text-xs uppercase py-3 font-bold block" href="#/login"><i
                  class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"></i>
                Email (soon)</a>
            </li>
            <li class="items-center">
              <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                href="../messaggi/messaggi.php"><i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                Messaggi</a>
            </li>
            <li class="items-center">
              <a class="text-blueGray-700 hover:text-red-500 text-xs uppercase py-3 font-bold block"
                href="../../adminLogin/login-out/logout.php"><i class="fas fa-power-off text-blueGray-400 mr-2 text-sm"></i>
                Esci</a>
            </li>
          </ul>
          <hr class="my-4 md:min-w-full" />
        </div>
      </div>
    </nav>
    <div class="relative md:ml-64 bg-blueGray-50">
      <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
          <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Benvenuto
            Admin!</a>
          <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" href="#pablo">
              <div class="items-center flex">
                <span
                  class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                  <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                    src="../../../img/logo.png" />
                </span>
              </div>
            </a>
          </ul>
        </div>
      </nav>



      <!-- Header -->
      <div class="relative bg-sky-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto mx-auto w-full"></div>
      </div>

      <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
        </div>

        <div class="flex flex-wrap mt-4">


          <?php
            include_once("../../../php/generalConfig.php");

            $sql1 = "SELECT id_domanda, domanda FROM domande_medie";
            $result1 = $conn->query($sql1);
        
            $sql2 = "SELECT id_risposta, id_domanda, risposta FROM risposte_medie";
            $result2 = $conn->query($sql2);
        
        
        
        
            echo "<div class='w-full xl:w-8/12 mb-12 xl:mb-0 px-0 mx-auto mt-6'>
                    <div class='relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded'>
                    <div class='rounded-t mb-0 px-0 py-6 border-0'>
                    <div class='flex flex-wrap items-center'>
                    <div class='relative w-full max-w-full flex-grow flex-1'>
                    <h3 class='font-semibold text-base text-blueGray-700 mb-3 px-6'>Domande medie:</h3>";
            if ($result1->num_rows > 0) {
                echo "<table class='items-center w-full bg-transparent border-collapse'>
                <tr>
                <th class='px-6 bg-slate-100 text-slate-600 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>id_domanda</th>
                <th class='px-6 bg-slate-100 text-slate-600 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>domanda</th>
                </tr>";
                while($row = $result1->fetch_assoc()) {
                    echo "<tr>
                    <td class='border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $row["id_domanda"]. "</td>
                    <td class='border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $row["domanda"]. "</td>
                    </tr>";
                }
                echo "</table></div></div></div></div></div>";
            } else {
                echo "0 results";
            }
        
        
            echo "<div class='w-full xl:w-8/12 mb-12 xl:mb-0 px-0 mx-auto mt-6'>
                    <div class='relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded'>
                    <div class='rounded-t mb-0 px-0 py-6 border-0'>
                    <div class='flex flex-wrap items-center'>
                    <div class='relative w-full max-w-full flex-grow flex-1'>
                    <h3 class='font-semibold text-base text-blueGray-700 mb-3 px-6'>Risposte medie:</h3>";
            if ($result2->num_rows > 0) {
                echo "<table class='items-center w-full bg-transparent border-collapse'>
                <tr>
                <th class='px-6 bg-slate-100 text-slate-600 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>id_risposta</th>
                <th class='px-6 bg-slate-100 text-slate-600 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>id_domanda</th>
                <th class='px-6 bg-slate-100 text-slate-600 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>risposta</th>
                </tr>";
        
                while($row = $result2->fetch_assoc()) {
                    echo "<tr>
                    <td class='border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $row["id_risposta"]. "</td>
                    <td class='border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $row["id_domanda"]. "</td>
                    <td class='border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $row["risposta"]. "</td>
                    </tr>";
                }
                echo "</table></div></div></div></div></div";
            } else {
                echo "0 results";
            }
            ?>

        </div>




        <form action="insert.php" method="post" class="mx-auto mt-12">
          <div class="mb-4 text-center">
            <label for="domanda" class="text-xl font-medium">Inserisci una nuova domanda:</label>
            <input type="text" id="domanda" name="domanda"
              class="ml-5 border border-gray-400 rounded-md p-1 w-full mt-4" required>
          </div>
          <div class="mb-4 text-center">
            <label for="num_risposte" class="text-lg font-medium">Numero di risposte:</label>
            <select id="num_risposte" name="num_risposte" onchange="createInputFields()"
              class="ml-5 mb-6 border border-gray-400 rounded-md p-1 w-1/6">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div id="input_fields" class="flex flex-col items-left"></div>
          <div class="text-center">
            <input type="submit" value="Invia"
              class="cursor-pointer m-10 bg-blue-500 text-white px-4 py-2 w-1/3 rounded-md hover:bg-blue-600">
          </div>
        </form>

        <script>
          function createInputFields() 
          {
            var numRisposte = document.getElementById("num_risposte").value;
            var inputFields = document.getElementById("input_fields");
            inputFields.innerHTML = "";
            for (var i = 1; i <= numRisposte; i++) {
              inputFields.innerHTML += '<div class="my-4 text-center"><label for="risposta' + i + '">Risposta ' + i + ':</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/2" type="text" id="risposta' + i + '" name="risposta' + i + '" required></div>';
              inputFields.innerHTML += '<div class="my-2 text-center flex flex-column">';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_liceo_sportivo' + i + '">Punti Liceo Sportivo:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_liceo_sportivo' + i + '" name="punti_liceo_sportivo' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_conservatorio' + i + '">Punti Conservatorio:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_conservatorio' + i + '" name="punti_conservatorio' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_istituto_professionale' + i + '">Punti Istituto Professionale:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_istituto_professionale' + i + '" name="punti_istituto_professionale' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_istituto_tecnico' + i + '">Punti Istituto Tecnico:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_istituto_tecnico' + i + '" name="punti_istituto_tecnico' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_liceo_scientifico' + i + '">Punti Liceo Scientifico:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_liceo_scientifico' + i + '" name="punti_liceo_scientifico' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_liceo_classico' + i + '">Punti Liceo Classico:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_liceo_classico' + i + '" name="punti_liceo_classico' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_scienze_umane' + i + '">Punti Scienze Umane:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_scienze_umane' + i + '" name="punti_scienze_umane' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_istituto_tecnico_turistico' + i + '">Punti Istituto Tecnico Turistico:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_istituto_tecnico_turistico' + i + '" name="punti_istituto_tecnico_turistico' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_professionale_sociale' + i + '">Punti Professionale Sociale:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_professionale_sociale' + i + '" name="punti_professionale_sociale' + i + '" value="0"></div>';
              inputFields.innerHTML += '<div class="my-1"><label for="punti_liceo_linguistico' + i + '">Punti Liceo Linguistico:</label><input class="ml-5 border border-gray-400 rounded-md p-1 w-1/6" type="number" id="punti_liceo_linguistico' + i + '" name="punti_liceo_linguistico' + i + '" value="0"></div>'
              inputFields.innerHTML += '</div>';
            }
          }
        </script>

        <form action="delete.php" method="post" class="mx-auto">
          <div class="mt-20 mb-4 text-center">
            <label for="domande" class="text-lg font-medium">Seleziona la domanda da eliminare:</label>
            <select id="domande" name="id_domanda" class="ml-5 border border-gray-400 rounded-md p-2 w-1/2">
              <?php
                $sql = "SELECT id_domanda, domanda FROM domande_medie";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id_domanda'] . '">' . $row['domanda'] . '</option>';
                }
                ?>
            </select>
          </div>
          <div class="text-center mb-10 mt-8">
            <input type="submit" value="Elimina"
              class="cursor-pointer bg-red-500 text-white px-4 py-2 w-1/6 rounded-md hover:bg-red-600">
          </div>
        </form>



        <footer class="block py-6 w-full">
          <div class="container mx-auto px-6">
            <hr class="mb-4 border-b-1 border-blueGray-200" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-blueGray-500 font-semibold py-1">
                  Copyright © <span id="javascript-date"></span>
                  <a href="https://www.creative-tim.com"
                    class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                    Creative Tim
                  </a>
                </div>
              </div>
              <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                  <li>
                    <a href="https://www.creative-tim.com"
                      class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/presentation"
                      class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com"
                      class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md"
                      class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      MIT License
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>


  <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    /* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("bg-white");
      document.getElementById(collapseID).classList.toggle("m-2");
      document.getElementById(collapseID).classList.toggle("py-3");
      document.getElementById(collapseID).classList.toggle("px-6");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-end"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
  </body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="page-styles/data.css" />
    <link rel="stylesheet" href="./footer.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />



</head>

<body>
    <div class="wrapper">
        <!-- header-->
    <div class="header-navigation">
        <div class="items">
            <div class="home"  id="statusText" ><a href="home.php" style=" text-decoration:none; color: black;">Home</a></div>
            <div class="status" id="statusText"><a href="status.php"
                    style=" text-decoration:none; color: black;">Status</a></div>
            <div class="status" id="repositoriesText"><a href="repo.php"
                style=" text-decoration:none; color: black; 
    text-shadow: 1px 0 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(0, 0, 0, 0.5), -1px 0 0 rgba(0, 0, 0, 0.5), 0 -1px 0 rgba(0, 0, 0, 0.5);">Repositories</a></div>
            <div class="status" id="reportText"><a href="report.php"
                    style=" text-decoration:none; color: black;">Report</a></div>
            <div class="button" id="buttonContainer">
                <div class="log-out"><a href="login.php" style="text-decoration: none; color: white;">Log Out</a></div>
            </div>
        </div>
        <img class="updated-logo-v5-no-bilog-1" alt="" src="assets/updated-logo-v-5-no-bilog-10.png">
        <img class="llda-logo-2" alt="" src="assets/llda-logo-21.png">
    </div>
    <!-- body content-->
    <div>
      
        <div class="data-repositories">Data Repositories</div>
        <div class="input-field-with-button">
      
            <form action="#">
                <input type="file" id="myFile" name="filename">
                <input class="button-new" type="submit">
              </form>
        </div>
        <div class="multi-line-paragraph-input">
        <div class="classification-report">Classification Report</div>
        <div class="field1">
        <div class="label1">
        <span class="label-txt">
        <p class="accuracy">Accuracy</p>
        <p class="accuracy">Precision</p>
        <p class="accuracy">Recall</p>
        <p class="accuracy">F-1 score</p>
        <p class="accuracy">Confusion Matrix</p>
        </span>
        </div>
        </div>
        </div>
        
    </div>
    <div class="foot">
        <footer>
            <div class="footer">
                <div class="items1">
                    <div class="research-proponents">Research Proponents</div>
                    <div class="marcus-henson-l">Marcus Henson L. Garcia</div>
                    <div class="john-wilson-d">John Wilson D. Lorin</div>
                    <div class="joshua-a-rancap">Joshua A. Rancap</div>
                </div>
                <div class="laguna-lake-development">Laguna Lake Development Authority</div>
                <div class="social-icons">
                    <img class="buttons-icon" alt="" src="Buttons/fb.png">
    
                    <img class="buttons-icon" alt="" src="Buttons/ig.png">
    
                    <img class="buttons-icon" alt="" src="Buttons/yt.png">
    
                </div>
                <div class="divider">
                </div>
                <div class="llda-all-rights">© 2024 LLDA. All Rights Reserved </div>
            </div>
        </footer>
    </div>
    </div>
    

    <script>
        var homeText = document.getElementById("homeText");
        if(homeText) {
        homeText.addEventListener("click", function (e) {
        // Add your code here
        });
        }
        var statusText = document.getElementById("statusText");
        if(statusText) {
        statusText.addEventListener("click", function (e) {
        // Add your code here
        });
        }
        var repositoriesText = document.getElementById("repositoriesText");
        if(repositoriesText) {
        repositoriesText.addEventListener("click", function (e) {
        window.location.href = "Repositories.php"
        });
        }
        var reportText = document.getElementById("reportText");
        if(reportText) {
        reportText.addEventListener("click", function (e) {
        // Add your code here
        });
        }
        var buttonContainer = document.getElementById("buttonContainer");
        if(buttonContainer) {
        buttonContainer.addEventListener("click", function (e) {
        // Add your code here
        });
        }
        </script>
        
</body>


</html>
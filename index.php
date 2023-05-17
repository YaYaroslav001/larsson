<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Larsson</title>
  </head>
  <body>
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" viewBox="0 0 200 40">
        <--g fill="none" fill-rule="evenodd"><path fill="#000" fill-rule="nonzero" d="M48 40V8h4.024v28.41H66V40H48zm37.2 0l-.748-3.873h-.17c-1.17 1.51-2.334 2.534-3.495 3.07-1.161.535-2.625.803-4.392.803-2.308 0-4.118-.624-5.429-1.87C69.656 36.881 69 35.121 69 32.847c0-4.9 3.754-7.468 11.263-7.703l3.975-.154v-1.43c0-1.834-.384-3.188-1.154-4.06-.769-.874-2.002-1.31-3.697-1.31-1.24 0-2.412.19-3.516.572-1.104.382-2.14.807-3.11 1.277l-1.175-2.971a17.111 17.111 0 0 1 3.868-1.519 16.27 16.27 0 0 1 4.147-.55c2.835 0 4.944.646 6.326 1.937C87.309 18.227 88 20.282 88 23.099V40h-2.8zm-8.002-3c2.114 0 3.776-.593 4.986-1.78S84 32.347 84 30.163V28l-3.4.153c-2.646.102-4.574.539-5.784 1.31-1.21.772-1.816 1.988-1.816 3.649 0 1.252.367 2.213 1.102 2.883.735.67 1.767 1.005 3.096 1.005zm26.985-22c1.062 0 2.002.086 2.817.258l-.48 3.563c-.889-.2-1.755-.3-2.6-.3a6.47 6.47 0 0 0-3.527 1.03c-1.085.687-1.933 1.635-2.544 2.844-.612 1.21-.918 2.551-.918 4.025V40H93V15.43h3.232l.437 4.314h.175c.917-1.56 2.002-2.74 3.254-3.542A7.43 7.43 0 0 1 104.183 15zM127 32.904c0 2.256-.83 4.002-2.49 5.24-1.66 1.237-3.992 1.856-6.995 1.856-3.133 0-5.624-.505-7.472-1.516v-3.603c2.613 1.29 5.133 1.934 7.558 1.934 1.964 0 3.393-.323 4.288-.967.895-.644 1.343-1.509 1.343-2.592 0-.952-.43-1.758-1.289-2.417-.859-.659-2.385-1.413-4.58-2.263-2.238-.878-3.811-1.629-4.721-2.251-.91-.623-1.577-1.322-2.003-2.098-.426-.777-.639-1.721-.639-2.834 0-1.977.794-3.537 2.382-4.68 1.588-1.142 3.768-1.713 6.54-1.713 2.7 0 5.227.542 7.58 1.626l-1.321 3.141c-2.411-1.025-4.584-1.538-6.519-1.538-1.617 0-2.844.26-3.681.78-.837.52-1.256 1.234-1.256 2.142 0 .879.36 1.607 1.083 2.186.722.578 2.403 1.38 5.046 2.406 1.977.746 3.44 1.442 4.385 2.087.946.644 1.642 1.369 2.09 2.174.447.806.671 1.773.671 2.9zm21 0c0 2.256-.83 4.002-2.49 5.24-1.66 1.237-3.992 1.856-6.995 1.856-3.133 0-5.624-.505-7.472-1.516v-3.603c2.613 1.29 5.133 1.934 7.558 1.934 1.964 0 3.393-.323 4.288-.967.895-.644 1.343-1.509 1.343-2.592 0-.952-.43-1.758-1.289-2.417-.859-.659-2.385-1.413-4.58-2.263-2.238-.878-3.811-1.629-4.721-2.251-.91-.623-1.577-1.322-2.003-2.098-.426-.777-.639-1.721-.639-2.834 0-1.977.794-3.537 2.382-4.68 1.588-1.142 3.768-1.713 6.54-1.713 2.7 0 5.227.542 7.58 1.626l-1.321 3.141c-2.411-1.025-4.584-1.538-6.519-1.538-1.617 0-2.844.26-3.681.78-.837.52-1.256 1.234-1.256 2.142 0 .879.36 1.607 1.083 2.186.722.578 2.403 1.38 5.046 2.406 1.977.746 3.44 1.442 4.385 2.087.946.644 1.642 1.369 2.09 2.174.447.806.671 1.773.671 2.9zm27-5.448c0 3.94-.983 7.015-2.948 9.227-1.965 2.211-4.682 3.317-8.15 3.317-2.153 0-4.06-.509-5.722-1.527-1.661-1.018-2.94-2.479-3.836-4.382-.896-1.904-1.344-4.116-1.344-6.635 0-3.925.968-6.982 2.904-9.172 1.937-2.19 4.653-3.284 8.15-3.284 3.353 0 6.015 1.117 7.987 3.35 1.973 2.234 2.959 5.269 2.959 9.106zm-18 .48c0 2.964.591 5.216 1.774 6.755 1.183 1.54 2.929 2.309 5.237 2.309 2.279 0 4.013-.77 5.204-2.31 1.19-1.538 1.785-3.79 1.785-6.754 0-2.965-.599-5.195-1.796-6.691-1.198-1.497-2.95-2.245-5.258-2.245-4.63 0-6.946 2.978-6.946 8.936zM196.156 40V23.93c0-1.917-.429-3.345-1.286-4.282-.856-.938-2.199-1.406-4.028-1.406-2.433 0-4.2.669-5.302 2.007-1.102 1.338-1.652 3.517-1.652 6.536V40H180V15.43h3.132l.583 3.22h.216c.734-1.16 1.764-2.058 3.088-2.695 1.325-.637 2.787-.955 4.385-.955 2.908 0 5.068.701 6.48 2.104 1.41 1.402 2.116 3.585 2.116 6.547V40h-3.844z"/>
        <path fill="#0061AE" d="M32.861 40L20 14.246 7.139 40H0L20 0l20 40h-7.139z"/>
        <path fill="#FFDE02" d="M25.658 26L19.5 32.386 13.342 26H6l13.5 14L33 26h-7.342z"/>
        </g>
      </svg>
    </div>
    <div class="form">
      <form>
        <div  style ="text-align:center;">
          <label for="Name"><h5>Имя пользователя:</h5></label><br>
        </div>
        <input type="text" name="txtName" id="txtName" class="input" placeholder="Имя..."><br><br>
        <div  style ="text-align:center;">
          <label for="message"><h5>Сообщение:</h5></label><br>
        </div>
        <textarea name="txtMessage" id="txtMessage" class="input" placeholder="Сообщение..."></textarea><br>
        <script type="text/javascript">
          textarea = document.querySelector("#txtMessage");
          textarea.addEventListener('input', autoResize, false);

          function autoResize() {
              this.style.height = 'auto';
              this.style.height = this.scrollHeight + 'px';
          }
        </script>
        <button class="submit_button"
          type="submit" id="submit_button">
          <b>Отправить</b>
        </button>
      </form>
    </div>

    <?php
    $link = mysqli_connect("localhost", "root", "", "mydb");
    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    ?>

    <script>
        $(document).ready(function() {

            $("#submit_button").click(function() {

                var name = $("#txtName").val();
                var text = $("#txtMessage").val();
                var date = new Date().toISOString().slice(0, 19).replace('T', ' ');
                var something_empty = false

                if(name=='') {
                    document.getElementById("txtName").style.border="2px solid red";
                    document.getElementById("txtName").style.boxShadow = "0 0 5px red";
                    something_empty = true;
                }
                if(text=='') {
                    document.getElementById("txtMessage").style.border="2px solid red";
                    document.getElementById("txtMessage").style.boxShadow = "0 0 5px red";
                    something_empty = true;
                }
                if(something_empty == true) {
                  return false;
                }

                $.ajax({
                    type: "POST",
                    url: "input.php",
                    data: {
                        name: name,
                        text: text,
                        date: date,
                    },
                    cache: false,
                    success: function(data) {
                        //alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });

            });

        });
    </script>

    <!-- Вариант без подзагрузки -->

    <!--script type="text/javascript">

     $(document).ready(function() {

          $.ajax({
            type: "POST",
            url: "output.php",
            dataType: "html",
            success: function(response){
                $("#cards").html(response);
            }

        });
    });

  </script-->

  <script>
    var block_show = false;

    function scrollMore(){
    	var $target = $('#showmore-triger');

    	if (block_show) {
    		return false;
    	}

    	var wt = $(window).scrollTop();
    	var wh = $(window).height();
    	var et = $target.offset().top;
    	var eh = $target.outerHeight();
    	var dh = $(document).height();

    	if (wt + wh >= et || wh + wt == dh || eh + et < wh){
    		var page = $target.attr('data-page');
    		page++;
    		block_show = true;

    		$.ajax({
    			url: 'output.php?page=' + page,
    			dataType: 'html',
    			success: function(data){
    				$('#cards').append(data);
    				block_show = false;
    			}
    		});

    		$target.attr('data-page', page);
    		if (page ==  $target.attr('data-max')) {
    			$target.remove();
    		}
    	}
    }

    $(window).scroll(function(){
    	scrollMore();
    });

    $(document).ready(function(){
    	scrollMore();
    });
  </script>

  <?php

    $limit = 10;

    $dbh = new PDO('mysql:dbname=mydb;host=localhost', 'root', '');

    $sth = $dbh->prepare("SELECT * FROM `card` ORDER BY date DESC LIMIT {$limit}");
    $sth->execute();
    $items = $sth->fetchAll(PDO::FETCH_ASSOC);

    $sth = $dbh->prepare("SELECT COUNT(`idCARD`) FROM `card`");
    $sth->execute();
    $total = $sth->fetch(PDO::FETCH_COLUMN);
    $amt = ceil($total / $limit);
  ?>

    <div id="cards" data-page="1">
      <?php foreach ($items as $row): ?>
        <div class="card">
          <b><?php echo $row['user']; ?></b>
          <?php echo $row['date']; ?><hr>
          <p><?php echo $row['text']; ?></p>
        </div>
  		<?php endforeach; ?>
    </div>
    <div id="showmore-triger" data-page="1" data-max="<?php echo $amt; ?>">
	       <img src="ajax-loader.gif" alt="">
    </div>
  </body>
</html>

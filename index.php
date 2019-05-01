<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>miniajax</title>
	<style>body{background: #ddd; margin: 40px;}</style>
<script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
</head>

<body>
    <h2>Hello ajax</h2>
    <h4>dbname=miniajax</h4>
   <!-- <form action="some.php" method="post"> -->
   
        <input type="text" class="title" name="title">
        <br><br>
        <textarea name="content" class="content" cols="30" rows="10"></textarea>
        <br>
        <button class="otpravka">Submit</button>
		<br><br>
		<button class="delete">Delete</button>
    <!-- </form> -->
    
    <p id="out2">text </p>
    
    <script>
        $(document).ready(function(){
            $('button.otpravka').on('click', function(){
                var titleValue = $('input.title').val();
                var contentValue = $('textarea.content').val();
                
      //отправить данные отсюда в файл some.php
                   
        
        $.ajax({
          method: "POST",
          url: "some.php", 
          data: { title: titleValue, content: contentValue } //отправляет данные
        })
          .done(function() {
           // alert( "Data Saved: " + msg ); //получает данные
          }); 
		  
     $('input.title').val('');
     $('textarea.content').val(''); //очищаем форму
                
                   })
        });
    </script>
	
</body>
</html>




<div class ="viepost">


</div>


<div class="post">
    <?php
//        foreach ($posts as $post=>$key){
//            echo "<li>".$post->name."</li>";
//            echo "<li>".$post->description."</li>";
//        }
        echo "<form action='/'><input  required type='ext' name='nam' value='".$posts->name."'> <input type='submit' title='submit'></form>";
        echo "<li>".$posts->name."</li>";
        echo "<li>".$posts->description."</li>";
        echo "<li>" .$posts->id."</li>";


    ?>
</div>
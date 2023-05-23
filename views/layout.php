<style>
      .edit-btn{
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 4px;
    transition: all 0.2s ease-in-out;
    display: inline-block;
    margin-right: 10px;
  }
    .edit-btn:hover{
    background-color: #fff;
    color: #4CAF50;
    box-shadow: 0px 0px 5px #4CAF50;
  }
</style>
<center>
<a  class="edit-btn" href="/Darrebni/HOme Task/user-mvcacc/">Home</a>
<a   class="edit-btn" href="/Darrebni/HOme Task/user-mvcacc/create">Create</a>
<?php
       
    require "views/user/index.php";

?>
</center>
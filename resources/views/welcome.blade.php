@extends('layout')
@section('content')

<div class="container">

  <div id="myDIV" class="header">
    <h2>To Do</h2>
    <input type="text" id="input" placeholder="Titulo">
    <span onclick="newElement()" class="addBtn">Add</span>
  </div>
  
  <ul id="myUL">
    <li>Task 1</li>
    <li class="checked">Task 2</li>
    <li>Task 3</li>
    <li>Task 4</li>
    <li>Task 5</li>
    <li>Task 6</li>
  </ul>

</div>

@endsection
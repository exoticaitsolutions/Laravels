<form action="/update-endpoint" method="post">
    {{$userss}}
  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id" value="5" readonly><br>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="Wendy Sweet"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value="nupev@mailinator.com"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" value="Pa$$w0rd!"><br>
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender">
    <option value="Female" selected>Female</option>
    <option value="Male">Male</option>
  </select><br>
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city" value="A corporis a nulla m"><br>
  <label for="text_area">Text Area:</label><br>
  <textarea id="text_area" name="text_area">Accusamus et velit q</textarea><br>
  <label for="filename">Filename:</label><br>
  <input type="text" id="filename" name="filename" value="1690202348.png" readonly><br>
  <input type="submit" value="Submit">
</form>

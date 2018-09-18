
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>


     <form action="submit.php" method="post">
     <label for="spz">SPZ</label>
     <input id="spz" type="text" name="spz" placeholder="1X1 1111">
    <br />
         <label for="znacka">Značka</label>
         <select id="znacka"  name="znacka" >
         <option value="Ford">Ford</option>
         <option value="Škoda">Škoda</option>
         <option value="Opel">Opel</option>
         <option value="Suzuki">Suzuki</option>
         <option value="Fiat">Fiat</option>
         <option value="Mitsubishi">Mitsubishi</option>
         </select>
      <br />
            <input type="submit" name="submit" value="Odeslat">
      </form>
    </body>
  </html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="">
        <select name="letter" id="letter">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        &nbsp;|&nbsp;
        <select name="letterNumber" id="letterNumber">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <input type="button" value="OK">
    </form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js'></script>
    <script>
    letter.onchange = (e) => {
        let s = letter.value;
        getOption(s);
    }

    getOption("A");

    function getOption(letter) {
        axios.get("getLetterNumber.php?letter=" + letter)
            .then(res => {
                letterNumber.innerHTML = res.data;
            })
            .catch(err => {
                console.log(err);
            });
    }
    </script>
</body>

</html>
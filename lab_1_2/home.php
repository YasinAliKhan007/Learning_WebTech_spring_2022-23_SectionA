<html>

<body>

    <form method="post" action="outcome.php">
        Name: <input type="text" name="fname"><br><br>
        Gender: <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        Subject : <br>
        <input type="checkbox" id="subject" name="subject1" value="Chemistry">
        <label for="subject"> I Take Chemistry </label><br>
        <input type="checkbox" id="subject" name="subject2" value="COA">
        <label for="subject"> I Take COA</label><br>
        <input type="checkbox" id="subject" name="subject3" value="OS">
        <label for="subject"> I Take OS</label><br><br>
        Education: <br>
        <select name="education" id="education">
            <option value="" selected disabled>Please select an option...</option>
            <option value="SSC">SSC</option>
            <option value="HSC">HSC</option>
            <select><br><br>
                Comments: <br>
                <textarea name="message" rows="10" cols="30" placeholder="Share Your thoughts Here"></textarea><br><br>
                <input type="submit">
    </form>
</body>

</html>
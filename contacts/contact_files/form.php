
<div class="contactformbutton">
                <fieldset>
                    <legend>Директна връзка:</legend>
                    <form name="contactme" class="contactme" id="contactme" action="" method="post">
                        <p>
                        <br />
                            <label for="fname" id="fname_label">Вашето Име: </label><input type="text" name="fname" id="fname" size="30" maxlength="100" value="" />*
                         
                        <br />
                            <label for="lname" id="lname_label">Фамилия: </label><input type="text" name="lname" id="lname" size="30" maxlength="100" value="" />*
                         
                        <br />
                            <label for="email" id="email_label">Вашият E-mail: </label><input type="text" name="email" id="email" size="30" maxlength="100" value="" />*
                         
                        <br />
                            <label for="subject" id="subject_label">Тема: </label><input type="text" name="subject" id="subject" size="20" maxlength="30" value="" />*
                         
                        <br />
                            <label for="message" id="message_label">Съобщение: *</label><br/><textarea rows="10" cols="10" name="message" id="message"></textarea>
                        <br />
                        <br />
                            <label for="captcha" id="captcha_label"><img src="contact_files/nb/<? echo $no1; ?>.gif" alt="" /> <span style="position:relative; top:-3px;">+</span> <img src="contact_files/nb/<? echo $no2; ?>.gif" alt="" /> <span style="position:relative; top:-3px;">= to...</span></label><input type="text" name="captcha" id="captcha" size="20" maxlength="30" /> 
                        <br />    
                            <input type="reset" name="reset" value="Изчисти" />
                            <input type="submit" name="submit" value="Изпрати" />
                            <span style="position:relative; left:160px; top:5px;"><a href="http://www.scriptgenerator.net/78/HTML-PHP-jQuery-ContactForm-v2/" title="" style="border:0px;"><img style="border:0px" border="0" src="http://www.scriptgenerator.net/generator/contactme_v2/contact_files/img/ok.png" width="16" height="16" alt="Valid Contact Form" /></a></span>
                        </p>
                    </form>
                <!-- We will output the results from process.php here -->
                <div id="results"></div>
                </fieldset>
            </div>
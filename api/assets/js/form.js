        var form1 = document.getElementById("form1");
        var form2 = document.getElementById("form2");
        var form3 = document.getElementById("form3");

        var next1 = document.getElementById("next1");
        var next2 = document.getElementById("next2");
        var back1 = document.getElementById("back1");
        var back2 = document.getElementById("back2");
        var envoyer = document.getElementById("env");

        var input1 = document.getElementById("01");
        var input2 = document.getElementById("02");
        var input3 = document.getElementById("03");
        var input4 = document.getElementById("04");

        

        
       /* /form 1
        input0.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next1.disabled = true;

            if (value ="" ) {
                next1.disabled = true;
            }
        });

        input1.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next1.disabled = true;

            if (value ="" ) {
                next1.disabled = true;
            }
        });
        
        input2.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next1.disabled = true;

            if (value = "" ) {
                next1.disabled = true;
            }
        });

        input3.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next1.disabled = false;

            if (value = "") {
                next1.disabled = true;
            }
        });

        //form 2
        
        input4.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next2.disabled = true;

            if (value.length > 11 ) {
                next2.disabled = true;
            }
        });

        input5.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            next2.disabled = false;

            if (value === "" ) {
                next2.disabled = true;
            }
        });

        //form 3
        input6.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            envoyer.disabled = true;

            if (value.length < 6 ) {
                envoyer.disabled = true;
            }
        });
        
        input7.addEventListener("keyup" , (e) => {
            const value = e.currentTarget.value;
            envoyer.disabled = false;
            
            if (value.length < 6 ) {
                envoyer.disabled = true;
            }
        });*/


        //button
        next1.onclick = function() {
            form1.style.display = "none"
            form2.style.display = "block"
            
        }

        back1.onclick = function() {
            form1.style.display = "block";
            form2.style.display = "none"
        }

        next2.onclick = function() {
            form2.style.display = "none";
            form3.style.display = "block";
        }
        back2.onclick = function() {
            form2.style.display = "block";
            form3.style.display = "none"
        }
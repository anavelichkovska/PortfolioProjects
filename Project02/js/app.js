$(document).ready(function(){
    $('.carousel').carousel({
        interval: 10000
    })
    
    $('#imgBill1').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Make sure that your title matches your skills. E.g., if you’re an entry level PHP developer, don’t say that you’re a PHP Expert. Skip the abbreviations and titles – keep it short and modest.</p>
            <br>
            <p>Be concise and easy to understand. Don’t use overdone motivational quotes about work ethics and inspiration, try to make the ‘about’ section as personal and as reflective of you as possible.</p>
            <br>
            <p>Use the new “Open for business” feature. State your area of expertise and industry, to let recruiters know they can reach you.</p>
        `)
    })
    $('#imgBill2').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Don’t write in things that you wouldn’t like to happen. For example, if you say you work good under pressure, employers might have an ace up their sleeve when stacking a lot of work with a short deadline, because you said so. Value your skills and free time accordingly.
            </p>
            <br>
            <p>Explain every work experience you’ve had in detail – what were your obligations and tasks, what was your job title, which technologies and tools did you use etc.</p>
            <br>
            <p>Don’t be shy on listing experience that isn’t connected to your current profession. Volunteering at a local community center, summer jobs, projects you were a part of, pro bono work you did to improve your skills and gain experience – everything counts. Plus, every experience serves as proof to your work ethics and adaptability.</p>
        `)
    })
    $('#imgBill3').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Tip: If you have no experience and education to build up your profile, do some pro bono work or volunteer. You can help someone, and at the same time enrich your portfolio.
            <br>
            Under education, list all the formal and non-formal education you have, with focus on the education that is relevant to your current title. For example, if you put Brainster Coding Academy as an education, list all the modules and projects you have worked on. Make sure to list your major and bachelor/master/doctor thesis subject under the university education.
            </p>
            
        `)
    })
    $('#imgBill4').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Tip: Add connections from the same field of work as you; even people you don’t know personally. That way, recruiters have a bigger chance of coming across your profile.
            <br>
            Put in the skills you are most experienced in, so you can be endorsed from other people.
            </p>
            <br>
            <p>Tip: Ask friends and coworkers to endorse you.
            <br>
            List all your relevant accomplishments. Don’t say you have a black belt in karate, but mention an award from a hackaton.</p>
            
        `)
    })
    $('#imgLaika1').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Tip: Make sure you leave an email that you check regularly</p>
            <br>
            <p>Link all your social media and portfolios you want companies and recruiters to be able to see (LinkedIn, Facebook, Stack Overflow, GitHub, your personal website etc.)</p>
            <br>
            <p>Be realistic when choosing the reason why you have a portfolio on Laika. This will help recruiters know whether you are suitable for the position on the long run.
            </p>
        `)
    })
    $('#imgLaika2').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Be realistic when choosing the reason why you have a portfolio on Laika. This will help recruiters know whether you are suitable for the position on the long run.
            </p>
        `)
    })
    $('#imgLaika3').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>You can only pick 1 industry out of the given 9 (Software Engineering, Design, Marketing and Communication, Data Science, IT and Sysadmin, Sales and Business Development, HR and Recruitment, Project and Product Management, Customer Support).</p>
            <br>
            <p>You can pick up to 5 options in the Expertise field. Make sure your choices are realistic and they truly reflect the skills you are most confident in.</p>
            <br>
            <p>Choose up to 8 technologies, but make sure you really know their ins and outs. The matching algorithm connects you to companies whose job openings have precise technologies listed.
            </p>
        `)
    })
    $('#imgLaika4').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Work experience is not mandatory, but it helps companies know what kind of experience and in which industry you have.</p>
            <br>
            <p>Education is also not mandatory, but it adds weight to your portfolio if you have any academic knowledge.
            </p>
        `)
    })
    $('#imgLaika5').one('click',function(){
        $('#suggestions').empty();
        $('#suggestions').append(`
            <p>Select your desired salary. Don’t try to be too accessible, but please be realistic – make sure you desired salary is in accordance to your experience.</p> 
            <br>
            <p>You can choose multiple choices for your desired job plan.</p> 
            <br>
            <p>You can choose out of four locations, or multiple.</p> 
            <br>
            <p>You can choose between a job in office, remote, or both.</p> 
            <br>
            <p>Let the companies know what is your current job title.</p> 
            <br>
            <p>Be honest about the motivation behind looking for a new opportunity. This will help us and the companies searching for new employees.</p> 
        `)
    })  
    
    $('#edit').on('click', function(){
        
        var editable_elements = document.querySelectorAll("[contenteditable=false]");
        for(var i=0; i<editable_elements.length; i++)
        editable_elements[i].setAttribute("contenteditable", true);
        $(this).hide();
        $('#download').hide();
        $('#save').show();
        $('#devsuggestions').append(`
        <p>Click on the text to edit it and click on the titels for tips.</p>   
        `);
        $('#datasuggestions').append(`
        <p>Click on the text to edit it and click on the titels for tips.</p>   
        `);
        $('#marsuggestions').append(`
        <p>Click on the text to edit it and click on the titels for tips.</p>   
        `);
        $('#dessuggestions').append(`
        <p>Click on the text to edit it and click on the titels for tips.</p>   
        `);
        $('#imgRemove').remove();
        $('#inputPopup').show();
        $('#imgAdd').show();
        
    })
    $('#save').on('click', function(){
        var editable_elements = document.querySelectorAll("[contenteditable=true]");
         for(var i=0; i<editable_elements.length; i++)
         editable_elements[i].setAttribute("contenteditable", false);
         $(this).hide();
         $('#edit').show();
         $('#devsuggestions').hide();
         $('#datasuggestions').hide();
         $('#dessuggestions').hide();
         $('#marsuggestions').hide();
         $('#download').show();
         $('#inputPopup').hide();
     })
      
        $('#download').on('click', function(){
            html2canvas($("#target"), { onrendered: function(canvas) {
                var imgData = canvas.toDataURL('image/png');
                var doc = new jsPDF('p', 'mm', 'a3');
                doc.addImage(imgData, 'PNG', 30, 10);
                doc.save('CV.pdf');
                }
            });
         })
      
    
       if (window.File && window.FileList && window.FileReader) {
           
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("img").attr("src", e.target.result);
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });
                });
                fileReader.readAsDataURL(f);
            }
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
    
    
    
})

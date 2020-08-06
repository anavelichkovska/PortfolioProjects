$('#edit').on('click', function(){
    $('#desIntro').on('click',function(){
        $('#dessuggestions').empty();
        $('#dessuggestions').append(`
            <p>Write your resume in the language that you would use at your workplace. This is a great chance to show
            the company’s representatives that you can express yourself.</p> 
            <br>
            <p>One CV isn’t suitable for every job position. Adapt your CV for the job position you’re applying for.
            Write a short intro that truly represents you – not a cheesy quote, but something you truly believe in.</p> 
            <br>
            <p>Templates aren’t suitable for a designer, except if you are applying to a job call that explicitly wants that
            format.</p> 
            <br>
            <p>Make it just one page, and don’t write all the projects you’ve worked on – only the ​ones relevant​ to the
            position.</p> 
            <br>
            <p>Advice:​ This builder is a great start to help you with the content of the CV, but try making it in
            Photoshop or Illustrator..</p> 
            
        `)
    })
    $('#desWork').on('click',function(){
        $('#dessuggestions').empty();
        $('#dessuggestions').append(`
            <p>Describe every ​job experience​ with a few words about your most relevant responsibilities and projects
            connected to the title you’re applying for.</p>
            <br>
            <p>Dates are a time frame in which you have been on a certain job title. If you are still working there, leave
            a hyphen ( - ). First write your most recent experience, and the oldest ones last. We want to enable the
            reader to see what he needs to about your experience right away.</p>
            
        `)
    })
    $('#desEdu').on('click',function(){
        $('#dessuggestions').empty();
        $('#dessuggestions').append(`
            <p>List relevant ​education​, including workshops or lectures you have visited.</p>
            <br>
            <p>If you have a bachelor in Sports, and now you are applying as a designer because you finished a course, the course should be the highest in your “education” section.
            </p> 
            <br>
            <p>
            Don’t put in high and elementary school.</p>
            
        `)
    }) 
    $('#desInfo').on('click',function(){
        $('#dessuggestions').empty();
        $('#dessuggestions').append(`
            <p>Email, phone number and date of birth are the practical part of the assembly of a CV. Don’t leave your home address.
            </p> 
            <br>
            <p>Enter your
            professional email address, preferably on Gmail.</p>
            <br>            
            <p>Your city of living is an information that interests your potential employers. Don’t leave your home address.</p>
            <br>
            <p>Leave a link to your LinkedIn profile, or Behance/Dribbble/WiX. Make sure it’s clickable, and shorten it.</p>
           
        `)
    }) 
    $('#desSkill').on('click',function(){
        $('#dessuggestions').empty();
        $('#dessuggestions').append(`
            <p>List all the ​skills, tools and technologies​ that you know well.</p>
            <br>
            <p>Tip: Play with the font size. The visual part of the CV is also important, so use different colors and
            dimensions.</p>
            <p>All languages, even those you don’t speak fluently, can help you get a certain position. </p>
            <br>
            <p>Use expressions
            such as “fluent in”, “speaking level of”, “native language” and similar.</p>
        `)
    })  
    $('#addDesWork').show();
    $('#addDesWork').on('click',function(){
        $('#desWork').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDesSkill').show();
    $('#addDesSkill').on('click',function(){
        $('#desSkill').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    
    $('#addDesEdu').show();
    $('#addDesEdu').on('click',function(){
        $('#desEdu').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    
    $('#addDesInfo').show();
    $('#addDesInfo').on('click',function(){
        $('#desInfo').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
   
   
}) 
$('#save').on('click', function(){
    $('#addDesWork').hide();
    $('#addDesSkill').hide();
    $('#addDesEdu').hide();
    $('#addDesInfo').hide();
    
})
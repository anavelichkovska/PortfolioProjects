$('#edit').on('click', function(){
    $('#marIntro').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>Write your resume in the language that you would use at your workplace. This is a great chance to show the company’s representatives that you can express yourself.</p> 
            <br>
            <p>Put a photo that looks professional – made with a good camera and showing you in a warm light. It’s
            better to send a CV without a photo, than a photo that makes you seem unprofessional.</p> 
            <br>
            <p>Know your unique value proposition and communicate it effectively.​ You need a personal tagline that
            will help you stand out from everyone else. This line should be the first impression the hiring manager
            will get from you. E.g. if you’re a Content Writer, don’t just say ‘’I’m a great content writer’’. Be creative
            and say why they should hire you to handle their content.</p>
            <br>
            <p>Tailor your CV to the company and position you’re applying for. Highlight the keywords from the job
            specification on your CV. For example, if you’re applying for an e-commerce role, include keywords such
            as ‘’Conversion, bounce rate and Google Analytics’’.</p> 
            <br>
            <p>.</p> 
            
        `)
    }) 
    $('#marWork').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>Do your research​ in advance to create a value proposition relevant to the company you’re applying to.</p>
            <br>
            <p>List the ​job experiences​ that are relevant to the position you’re applying for. If you’re currently working,
            your current job titles.</p>
            <br>
            <p>Explain your responsibilities and projects and list the strategies and projects you
            created or worked on.</p> 
            <br>
            <p>Talk about campaigns you worked on, the budget you had, how it benefited the company etc. This will
            help recruiters learn how you could benefit them based on your past experience.</p>
            <br>
            <p>Dates – a time frame in which you have been on a certain job title. If you are still working there, leave a
            hyphen ( - ). Leave your most recent experience first, and the oldest ones last. Enable the reader to see what he needs to about your experience right away. Describe every job title with a few words about
            your most relevant experiences connected to the title you’re applying for.
            <br>
            <p>Tip: Use Action verbs to demonstrate your experience. Examples include: “applied”, “improved”, “implemented” etc.</p>
            
        `)
    })
    $('#marEdu').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>Under education, list only the ​relevant studies and courses​, like university degree or Digital Marketing
            Academy. Don’t write where you went to high school.
            </p>
            <br>
            <p>Don’t be afraid to include a “Self-Study” where you can list all the courses, conferences, workshops and
            webinars that you used to teach yourself about digital marketing. Don’t include everything – just the
            education that is relevant and necessary for the position you are applying for.</p>
            
        `)
    }) 
    $('#marInfo').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>Email, phone number and date of birth are the practical part of the assembly of a CV. </p>
            <p>Enter your professional email address, preferably on Gmail.</p> 
            <br>
            <p>Your city of living is an information that interests your
            potential employers. Don’t leave your home address.</p>
            
        `)
    }) 
    $('#marSkill').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>Analyze what your ​key skills​ are. Make sure to list the skills you can shine in from day one.</p> 
            <br>
            <p>Showcase all the tools and technologies you know how to use​. Everything that’s useful to a marketer:
            from Typeform and Canva, to Photoshop and Data Studio. Link campaigns you worked on If possible.</p>
            <br>
            <p>Use numbers.​ If you helped a social media page gain a lot of followers, put the number in. If your
            campaign influenced a spike in sales, write in the percentage. Also, explain how you got there too.</p>
        
            
        `)
    }) 
    $('#marLan').on('click',function(){
        $('#marsuggestions').empty();
        $('#marsuggestions').append(`
            <p>All languages, even those you don’t speak fluently, can help you get a certain position. 
            <br>
            It’s good to use
            expressions such as “fluent in”, “speaking level of”, “native language” and similar.</p>
            
        `)
    })
    $('#addMarWork').show();
    $('#addMarWork').on('click',function(){
        $('#marWork').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addMarSkill').show();
    $('#addMarSkill').on('click',function(){
        $('#marSkill').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addMarAch').show();
    $('#addMarAch').on('click',function(){
        $('#marAch').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addMarEdu').show();
    $('#addMarEdu').on('click',function(){
        $('#marEdu').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addMarCert').show();
    $('#addMarCert').on('click',function(){
        $('#marCert').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addMarLan').show();
    $('#addMarLan').on('click',function(){
        $('#marLan').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
   
    
}) 
$('#save').on('click', function(){
    $('#addMarWork').hide();
    $('#addMarSkill').hide();
    $('#addMaraAch').hide();
    $('#addMaraEdu').hide();
    $('#addMarCert').hide();
    $('#addMarLan').hide();
    
})
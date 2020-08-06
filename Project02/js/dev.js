$('#edit').on('click', function(){
    $('#devIntro').on('click',function(){
        $('#devsuggestions').empty();
        $('#devsuggestions').append(`
            <p>Write your resume in the language that you would use at your workplace. This is a great chance to show the company’s representatives that you can express yourself.</p> 
            <br>
            <p>Your photo should be professional. It’s better to send a CV without a photo,that with one that makes you seem unserious.</p> 
            <br>
            <p>Tailor the CV according to job you’re applying for. There is no ‘one size fits all’ CV – so always adapt it before applying to a job.</p> 
            <br>
            <p>Write a short intro that truly represents you –not cheesy quotes, but something you truly believe in. Don’t put overused buzzwords, describe yourself and your capabilities with your own vocabulary.</p> 
            
        `)
    }) 
    $('#devWork').on('click',function(){
        $('#devsuggestions').empty();
        $('#devsuggestions').append(`
            <p>Write your previous job experienceand if you’re currently working, your current job titles.</p>
            <br>
            <p>Explain your responsibilities and projects and list the tech stack and products/projects you worked on. 
            <br>
            <br>
            If you were working in a team, let the recruiter know what your role was.</p> 
            <br>
            <p>Dates– are time frame in which you have been on a certain job title.
            <br>If you are still working there,leavea hyphen ( - ). Leave your most recent experience first, and the oldest ones last.</p>
            <br>
            <p>Tip: Use Action verbs to demonstrate your experience. Examples include: “applied”, “improved”, “implemented” etc.</p>
            
        `)
    })
    $('#devEdu').on('click',function(){
        $('#devsuggestions').empty();
        $('#devsuggestions').append(`
            <p>Education is an important section–but be sure to select only what is relevant to the job you’re applying for.
            <br>
            <br>
            Write about your university degrees, relevant courses and if you have any publications, but skip the high and elementary school..</p>
            
            <p>Don’t be afraid to include a “Informal Education” section, where you can list all the courses, podcasts and webinars that you used to teach yourself about software development.
            </p> 
            <br>
            <p>
            Don’t include everything – just the education that is relevant and necessary for the position you are applying for.</p>
            
        `)
    }) 
    $('#devInfo').on('click',function(){
        $('#devsuggestions').empty();
        $('#devsuggestions').append(`
            <p>Email, phone number and date of birth are the practical part of the assembly of a CV.</p>
            <p>Enter your professional email address, preferably on Gmail.</p> 
            <br>
            <p>Your city of living is an information that interests your potential employers.</p>
            <br>
            <p>But don’t leave your home address. Leave a link to your LinkedIn profile.</p>
            <br>
            <p>If you have proof of your previous job experiences online, link that too.</p>
            
            
        `)
    }) 
    $('#devSkill').on('click',function(){
        $('#devsuggestions').empty();
        $('#devsuggestions').append(`
            <p>Showcase your tech stack.   Another way is to showcase your projects on GitHub.</p>
            <p>List the stack under every previous project you have worked on, or showcase your projects on GitHub.</p> 
            <br>
            <p>The easiest way to do this is to list the stack under a previous project that you have worked on.</p>
            <br>
            <p>Use numbers. If you helped a website scale, put a metric in there</p>
        
            
        `)
    }) 
    $('#addDevWork').show();
    $('#addDevWork').on('click',function(){
        $('#devWork').append(`
            <div>
                <input></input>
            </div>
           
        `)
    })
    $('#addDevSkill').show();
    $('#addDevSkill').on('click',function(){
        $('#devSkill').append(`
            <div>
                <input></input>
            </div>
           
        `)
    })
    $('#addDevAch').show();
    $('#addDevAch').on('click',function(){
        $('#devEdu').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDevInt').show();
    $('#addDevInt').on('click',function(){
        $('#devInt').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
}) 
$('#save').on('click', function(){
    $('#addDevWork').hide();
    $('#addDevSkill').hide();
    $('#addDevAch').hide();
    $('#addDevInt').hide();
})
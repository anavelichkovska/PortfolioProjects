$('#edit').on('click', function(){
    $('#dataIntro').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>Write your resume in the language that you would use at your workplace.</p> 
            <br>
            <p>Put a photo made with a good camera. It’s better to send a CV without a photo, if you were planning on cropping yourself from a group photo from a dinner with friends, or a selfie in you room</p> 
            <br>
            <p>Order: Start with the skills and recent job positions. Languages and other qualifications should come after that. If you need space, leave out your personal interests, or at least use a smaller font for them.</p>
            <br>
            <p>It might require more work and research, but  customize your CV according to the position you are applying for. Add small details in some places in accordance to the job description.</p>
            <p>Keep it brief</p> 
             
            
        `)
    }) 
    $('#dataWork').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>Write your previous job experience, and if you’re currently working, your current job title.</p>
            <br>
            <p>Explain your responsibilities and projects and list the tech stack and products/projects you worked on.. 
            <br>
            <br>
            If you were working in a team, let the recruiter know what your role was.</p> 
            <br>
            <p>Dates– are time frame in which you have been on a certain job title.
            <br>If you are still working there,leavea hyphen ( - ). Leave your most recent experience first, and the oldest ones last.</p>
            <br>
            <p>Tip: Use Action verbs to demonstrate your experience. Examples include: “applied”, “improved”, “implemented” etc.</p>
            <br>
            <p>Tip: Speak in the third person, in bullet form. Don’t write long sentences, try to go straight to the point. Try to incorporate the answers to these questions: What did they commend me for? Which technologies and tools did I use? Did I implement a new idea?</p>
            
        `)
    })
    $('#dataEdu').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>Let the recruiter know about youreducation, but only write the important parts – skip the high school and elementary, stick to the university degrees and courses relevant to the job you’re applying for</p>
            <br>
            <p>Don’t be afraid to include a “Informal Education” section, where you can list all the courses, podcasts and webinars that you used to teach yourself about software development.
            </p> 
            <br>
            <p>
            Don’t include everything – just the education that is relevant and necessary for the position you are applying for.</p>
            
        `)
    }) 
    $('#dataSkill').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>Be specific about the skills, tech and tools you used, and what your role was if you’re listing group projects. Specify coding languages, libraries etc.</p>
            <br>
            <p>Make  sure you use keywords that will put the focus on your best skills.</p> 
            <br>
            <p>If an HR/recruiter just scans your CV, they will catch their attention. Highlight terms like “Python” or “Machine learning”. Space is limited, so don’t waste t on soft skills like leadership or communication.</p>
            
        `)
    })
    $('#dataInfo').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>Include your LinkedIn profile link, but don’t just copy and paste the whole profile URL, shorten it.</p>
            <p>Add a GitHub link or personal profile link to your contact information, and make it clickable. You’re applying for data science jobs, so most employers are going to look at your portfolio to see what kinds of projects you’re working on.</p> 
            <br>
            <p>Email, phone number and date of birth are the practical part of the assembly of a CV. Enter your professional email address, preferably on Gmail. </p>
            <br>
            <p>Your city of living is an information that interests your potential employers.</p>
            <br>
            <p>But don’t leave your home address. Leave a link to your LinkedIn profile.</p>
            <br>
            <p>If you have proof of your previous job experiences online, link that too.</p>
            
            
        `)
    })  
    $('#dataLan').on('click',function(){
        $('#datasuggestions').empty();
        $('#datasuggestions').append(`
            <p>All languages, even those you don’t speak fluently, can help you get a certain position.</p>
            <br>
            <p>It’s good to use expressions such as “fluent in”, “speaking level of”, “native language” and similar.</p> 
        `)
    })
    $('#addDataWork').show();
    $('#addDataWork').on('click',function(){
        $('#dataWork').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDataSkill').show();
    $('#addDataSkill').on('click',function(){
        $('#dataSkill').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDataAch').show();
    $('#addDataAch').on('click',function(){
        $('#dataEdu').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDataCert').show();
    $('#addDataCert').on('click',function(){
        $('#dataCert').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDataLan').show();
    $('#addDataLan').on('click',function(){
        $('#dataLan').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    $('#addDataIE').show();
    $('#addDataIE').on('click',function(){
        $('#dataIE').append(`
        <div>
            <input></input>
        </div>
           
        `)
    })
    
    
}) 
$('#save').on('click', function(){
    $('#addDataWork').hide();
    $('#addDataSkill').hide();
    $('#addDataAch').hide();
    $('#addDataCert').hide();
    $('#addDataLan').hide();
    $('#addDataIE').hide();
})
$('#edit').on('click', function(){
    $('#container1 span, #container2 span, #container3 span, #container4 span, #container5 span').removeClass("full").addClass("empty")  
$(document).ready(function() {
    var container = $("#rating-container"); 
    var index = -1;	
    $(".rate").hover(
    function(){
        $(this).removeClass("rateChosen").addClass("rateHover");
        $(this).prevAll().removeClass("rateChosen").addClass("rateHover");
        $(this).nextAll().removeClass("rateChosen");
    },	
    function(){
        $(this).removeClass("rateHover");
        $(this).prevAll().removeClass("rateHover");
        if (index >= 0) {
            var Circle = container.children().get(index);
            var $rating = $(Circle);
                $rating.addClass ("rateChosen");
            $rating.prevAll().addClass ("rateChosen");
        }	
    });
    $(".rate").click(
    function(){
        $(this).addClass ("rateChosen");
        $(this).prevAll().addClass ("rateChosen");
        index = $(this).index();
        console.log (index);
    });
})
})


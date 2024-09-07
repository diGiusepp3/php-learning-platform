
# Database operations
db name = webmagiclearn_db <br>
connection is made trough ini.inc
## Tables
        
    categories
    -- id 	
    -- name 	
    -- description 	
    -- created_at 	
    -- updated_at 	

    courses
    -- id 	
    -- title 	
    -- description 	
    -- price 	
    -- duration 	    
    -- instructor 	
    -- created_at 	 
    -- updated_at 	
     
    course_categories
    -- course_id
    -- categorie_id 

    lessons
    -- id   
    -- course_id 	
    -- title 	
    -- content 	
    -- video_url 	
    -- created_at 	
    -- updated_at 	

    user-lessons
    -- 	user_id 	
    -- lesson_id 	
    -- status 	

    Payments
    -- id 	
    -- user_id 	
    -- course_id 	 
    -- amount 	
    -- payment_date 	
    -- payment_method 	
    
    Quizzes
    -- id 	
    -- lesson_id 	
    -- title 	
    -- created_at 	
    -- updated_at 	
    
    user-quizzes
    -- user_id 	
    -- quiz_id 	
    -- score 	
    -- completed_at 	
    
    Users
    -- id 	
    -- username 	
    -- email 	
    -- password 	
    -- role 	
    -- created_at 	
    -- updated_at
    // Student ann-sophie is password: tester2

    user-courses
    -- user_id 	
    -- course_id 	
    -- progress 	
    -- enrollment_date 	
    
    
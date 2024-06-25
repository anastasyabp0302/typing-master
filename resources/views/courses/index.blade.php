<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Typing master</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
            </ul>
        </div>
    </nav>
    <div class="d-flex">
        <div class="sidebar me-4">
            <h5>Menu</h5>
            <ul>
                <li><a href="#">Course</a></li>
                <li><a href="#">Review</a></li>
                <li><a href="#">Typing Test</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Satellite</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Information</a></li>
            </ul>
        </div>
        <div class="course-container">
            <h3>Choose Course</h3>
            <div class="course-details">
                <h4>Step 1: Touch Typing Course</h4>
                <p>In this course, you will learn the positions of the letter keys and common punctuation by heart. After completing the course you will be able to type with all ten fingers without looking at the keyboard.</p>
                <p><strong>Duration:</strong> 3:10 - 5:20 hours</p>
                <p><strong>Lessons:</strong> 12 lessons</p>
                <p><strong>Progress:</strong> Not started</p>
                <button class="btn btn-primary">Start Course</button>
            </div>
            <div class="accordion" id="courseAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Step 2: Launch Satellite
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#courseAccordion">
                        <div class="accordion-body">
                            Detailed description of Launch Satellite course.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Step 3: Speed Building Course
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#courseAccordion">
                        <div class="accordion-body">
                            Detailed description of Speed Building course.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Step 4: Advanced Typing Courses
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#courseAccordion">
                        <div class="accordion-body">
                            Detailed description of Advanced Typing Courses.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Include database connection
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';

$successMessage = '';
$errorMessage = '';
?>


<div class="container py-5">
    <h1>Create a New Lesson</h1>

    <?php if ($successMessage): ?>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($successMessage); ?>
        </div>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <div class="alert alert-danger">
            <?php echo htmlspecialchars($errorMessage); ?>
        </div>
    <?php endif; ?>

    <form action="create_lesson.php?course_id=<?php echo $courseId; ?>" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="video_url" class="form-label">Video URL (optional)</label>
            <input type="text" class="form-control" id="video_url" name="video_url">
        </div>
        <input type="hidden" name="course_id" value="<?php echo $courseId; ?>">
        <button type="submit" class="btn btn-primary">Create Lesson</button>
    </form>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';
?>
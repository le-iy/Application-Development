<?php
    $name = "Lei E. Caabay";
    $age = 21;
    $email = "lecaabay@fit.edu.ph";
    $phoneNum = "09278067775";
    $address = "878 Espana Tower, G.Tolentino St., Sampaloc, Manila";
    $school = "FEU Institute of Technology";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Resume - Caabay</title>
        <style>
          body {
            margin: 0;
            font-family: Georgia, Serif;
            background: #eeeeee;
            color: #333;
          }

          .resume {
            width: 900px;
            margin: 40px auto;
            background: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
          }

          .header {
            background: linear-gradient(135deg, #98E2C6, #545C52);
            color: white;
            text-align: center;
            padding: 60px 20px;
          }

          .header h1 {
            margin: 0;
            font-size: 42px;
          }

          .header p {
            margin-top: 12px;
            font-size: 20px;
            color: #ddd;
          }

          .content {
            display: flex;
            gap: 35px;
            padding: 20px;
          }

          .column {
            flex: 1;
          }

          h2 {
            color: #545C52;
            font-size: 24px;
            margin-bottom: 10px;
            margin-right: 2px;
            border-bottom: 3px solid #545C52;
            padding-bottom: 8px;
          }

          .item {
            margin-bottom: 2px;
          }

          .item h3 {
            margin-bottom: 8px;
            font-size: 20px;
          }

          .company, .date {
            color: #555;
            margin: 6px 0;
          }

          .desc {
            margin-top: 12px;
            line-height: 1.6;
          }

          .skill {
            display: inline-block;
            background: #dbeafe;
            color: #545C52;
            padding: 8px 12px;
            border-radius: 20px;
            margin: 6px;
            font-size: 14px;
          }

          .summary {
            line-height: 1.7;
            margin-top: 15px;
          }
        </style>
    </head>
<body>
  <div class="resume">
    <div class="header">
      <h1><?php echo $name; ?></h1>
      <p>Information Technology Student</p>
    </div>

    <div class="content">
      <h2 style = "border-right: 3px solid #545C52; border-bottom: 0;">Personal Information</h2>
      <p class="desc">
        Age: <?php echo $age; ?><br>
        Email: <?php echo $email; ?><br>
        Phone: <?php echo $phoneNum; ?><br>
        Address: <?php echo $address; ?>
      </p>
    </div>

    <div class="content">
      <div class="column">
        <h2>Technical Skills</h2>
        <span class="skill">Simple HTML</span>
        <span class="skill">Basic CSS</span>
        <span class="skill">JavaScript</span>
        <span class="skill">Basic SQL</span>

        <div class="column">
          <h2>Soft Skills</h2>
          <span class="skill">Simple HTML</span>
          <span class="skill">Basic CSS</span>
          <span class="skill">JavaScript</span>
          <span class="skill">Basic SQL</span>
        </div>
      </div>

      <div class="column">
        <div class="column">
        <h2>Certifications</h2>

        <span class="skill">Java</span>
        <span class="skill">Python</span>
      </div>
        <h2>Experience</h2>

        <div class="item">
          <h3>Rookie Programmer</h3>
          <p class="company"><?php echo $school; ?></p>
          <p class="date">2024 - present</p>
          <p class="desc">Currently studying related subject courses that are specialized in tech related information.</p>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="column">
        <div class="item">
          <h2>Education</h2>
          <p class="desc">
            Bachelor of Science in Information Technology<br>
            <?php echo $school; ?><br>
            2024 - Present
          </p>
        </div>
        <h2>Summary</h2>
        <p class="summary">Aspiring IT professional with a passion for programming and technology. Currently pursuing a degree in Information Technology, eager to apply my skills and knowledge in real-world projects. Dedicated to continuous learning and growth in the tech industry.</p>
      </div>
  </div>
</body>
</html>


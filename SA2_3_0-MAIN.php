<html>
<head>
    <title>SA2 Student Resume</title>
    <link rel="stylesheet" href="SA3_3_css.css">
</head>

<body>

<table>
    <tr>
        <td class="profile-box">
            <img src="image_bank/me.png">
        </td>

        <td class="personal-box">
            <?php require 'SA2_3_personal-info.php'; ?>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <?php include 'SA2_3_carrere-objective.php'; ?>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <?php include 'SA2_3_educ-attain.php'; ?>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <?php include 'SA2_3_skills.php'; ?>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <?php include 'SA2_3_afilliate.php'; ?>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <?php include 'SA2_3_worx-exp.php'; ?>
        </td>
    </tr>
</table>

</body>
</html>
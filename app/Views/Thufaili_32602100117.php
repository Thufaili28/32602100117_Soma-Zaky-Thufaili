<?= $this->extend('layout/32602100117_Thufaili')?>
<?= $this->section('content')?>
<div class="about">
  <div class="about-me">
    <h1>About Me</h1>
    <p>An undergraduate student at the Faculty of Industrial Technology, majoring in Informatics Engineering from the Islamic University of Sultan Agung Semarang</p>
  </div>
  <br>
  <div class="about-experience">
    <h1>Experience</h1>
    <div class="about-experience-list">
      <table border='1'>
        <tr>
          <th rowspan='3'>2022 - Now</th>
          <th colspan='2'>Himpunan Mahasiswa Teknik Informatika</th>
          <th rowspan='3'>2018 - 2020</th>
          <th colspan='2'>Enviro Jugo</th>
        </tr>
        <tr>
          <td>Semarang</td>
          <td>Indonesia</td>
          <td>Batang</td>
          <td>Indonesia</td>
        </tr>
        <tr>
          <td colspan='2'>As a forum that accommodates student aspirations, 
                        HM Informatics activities are related to the scientific context, 
                        reasoning, talent development, and student professionalism before 
                        going into society in the future.</td>
          <td colspan='2'>enviro jugo is a nature lover extracurricular 
                        activity  in the field of environment and nature conservation.</td>
        </tr>
      </table>
    </div>
  </div>
</div>

<style>
  /* app/Views/layout/32602100135_Sadra.css */
  /* app/Views/layout/32602100135_Sadra.css */
.about {
  display:block;
  flex-direction: column;
  align-items: center;
}

.about-me,
.about-experience {
  padding: 20px;
  text-align: center;
  background-color: #fff9e3;
  border-radius: 10px;
  margin-bottom: 20px;
}

.about-me h1,
.about-experience h1 {
  color: #333;
  margin-bottom: 10px;
}

.about-me p {
  font-size: 16px;
  color: #666;
}

.about-experience-list table {
  width: 100%;
  border-collapse: collapse;
}

.about-experience-list th,
.about-experience-list td {
  padding: 10px;
  border: 1px solid #333;
}

.about-experience-list th {
  background-color: #fff9e3;
  text-align: center;
  font-weight: bold;
}

.about-experience-list td {
  text-align: left;
  font-size: 14px;
}

@media (min-width: 600px) {
  /* Styles for larger screens */
  .about {
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
  }

  .about-me,
  .about-experience {
    flex: 1;
    margin: 0 10px;
  }

  .about-me p {
    font-size: 18px;
  }

  .about-experience-list td {
    font-size: 16px;
  }
}

</style>

<?= $this->endSection() ?>
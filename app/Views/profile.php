<!-- app/Views/profile.php -->
<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
    <!-- Isi konten profil di sini -->
    <h2>Profil Saya</h2>
    <p>Nama : Soma Zaky Thufaili</p>
    <p>Umur : 20 Tahun</p>
    <p>Fakultas : Teknologi Industri</p>

    <h2>Keahlian</h2>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
        <li>Problem Solver</li>
        <li>Microsoft Office</li>
    </ul>
<?= $this->endSection() ?>
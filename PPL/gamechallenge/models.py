from django.db import models

class User(models.Model):
    email=models.EmailField(max_length=38)
    # username=models.CharField(max_length=50)
    password=models.CharField(max_length=50)

    def __str__(self):
        return self.email

class JenisChallenge(models.Model):
    jenis = models.CharField(max_length=20)
    keterangan = models.CharField(max_length=30)

    def __str__(self):
        return self.jenis

class Challenge(models.Model):
    nama = models.CharField(max_length=20)
    nama_challenge = models.CharField(max_length=20)
    jenis_id = models.ForeignKey(JenisChallenge, on_delete=models.CASCADE, null=True)

    def __str__(self):
        return self.nama
# Create your models here.

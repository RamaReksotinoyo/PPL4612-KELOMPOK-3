from django.db import models
from django.utils.html import escape
from django.utils.safestring import mark_safe

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
    gambar = models.ImageField(upload_to='cover/', null=True)

    def image_tag(self):
        # return u'<img src="%s" />'  #escape(<URL to the image>)
        return mark_safe('<img src="{}" width=100 />'.format(self.gambar.url))
    image_tag.short_description = 'gambar'
    image_tag.allow_tags = True

    def __str__(self):
        return self.nama
# Create your models here.

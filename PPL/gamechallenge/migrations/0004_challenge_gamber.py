# Generated by Django 2.2.12 on 2021-06-13 06:28

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('gamechallenge', '0003_auto_20210610_0833'),
    ]

    operations = [
        migrations.AddField(
            model_name='challenge',
            name='gamber',
            field=models.ImageField(null=True, upload_to='cover/'),
        ),
    ]

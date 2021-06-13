from django.contrib import admin
from gamechallenge.models import User, JenisChallenge, Challenge

class ChallengeAdmin(admin.ModelAdmin):
    fields = ( 'image_tag', )
    readonly_fields = ('image_tag',)
    list_display=['nama', 'nama_challenge', 'jenis_id', 'gamber']
    search_fields=['nama', 'nama_challenge', 'jenis_id']
    list_filter=('jenis_id',)
    list_per_page=3

admin.site.register(User)
admin.site.register(JenisChallenge)
admin.site.register(Challenge, ChallengeAdmin)

# Register your models here.

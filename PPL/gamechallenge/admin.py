from django.contrib import admin
from gamechallenge.models import User, JenisChallenge, Challenge
from import_export.admin import ImportExportModelAdmin

class ChallengeAdmin(ImportExportModelAdmin):
    fields = ( 'image_tag', )
    readonly_fields = ('image_tag',)
    list_display=['nama', 'nama_challenge', 'jenis_id', 'image_tag']
    search_fields=['nama', 'nama_challenge', 'jenis_id']
    list_filter=('jenis_id',)
    list_per_page=4
    pass


admin.site.register(User)
admin.site.register(JenisChallenge)
admin.site.register(Challenge, ChallengeAdmin)

# @admin.register(Challenge)
# class PersonAdmin(ImportExportModelAdmin):
#     pass

# Register your models here.

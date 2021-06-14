from .models import Challenge
from import_export import resources

class ChallengeResources(resources.ModelResource):
    class Meta:
        model=Challenge
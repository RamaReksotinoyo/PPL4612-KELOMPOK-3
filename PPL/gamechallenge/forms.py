from django.forms import ModelForm
from gamechallenge.models import Challenge
from django import forms

class FormChallenge(ModelForm):
    class Meta:
        model=Challenge
        fields='__all__'

        widgets={
            'nama':forms.TextInput({'class':'form-control'}),
            'nama_challenge':forms.TextInput({'class':'form-control'}),
            'jenis_id':forms.Select({'class':'form-control'}),
        }
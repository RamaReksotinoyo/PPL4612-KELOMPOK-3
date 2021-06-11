from django.shortcuts import render, redirect
from django.http import HttpResponse
import datetime
from django.contrib.auth.decorators import login_required
from django.contrib import messages
from django.contrib.auth.forms import UserCreationForm
from gamechallenge.models import User
# from django.core.mail import EmailMessage
from django.conf import settings
from django.template.loader import render_to_string
from gamechallenge.forms import FormChallenge
from django.contrib.auth.models import User

def signup(request):
    if request.POST:
        form = UserCreationForm(request.POST)
        # email = EmailMessage(
        #     'Hey buddy',
        #     'Hows is your day',
        #     settings.EMAIL_HOST_USER,
        #     ['ramareksotinoyo@gmail.com']
        #     )
        if form.is_valid():
            form.save()
            messages.success(request, "User berhasil dibuat!")
            # email.fail_silently=False
            # email.send()
            return redirect('signup')
        else:
            messages.error(request, "Terjadi kesalahan!")
            return redirect('signup')
    else:
        form = UserCreationForm()
        konteks = {
            'form':form,
        }
    return render(request, 'signup.html', konteks)

def current_datetime(request):
    now = datetime.datetime.now()
    html = "<html><body>It is now %s.</body></html>" % now
    return HttpResponse(html)

def index(request):
    return render(request, 'index.html')

def home(request):
    return render(request, 'home.html')

def jadwal(request):
    return render(request, 'jadwal.html')

def peringkat(request):
    users=User.objects.all()
    context={
        'users':users
    }
    return render(request, 'peringkat.html', context)

def berita(request):
    return render(request, 'berita.html')

def login(request):
    return render(request, 'login.html') 

@login_required(login_url=settings.LOGIN_URL)
def uploadGame(request):
    return render(request, 'uploadGame.html')

@login_required(login_url=settings.LOGIN_URL)
def uploadChallenge(request):
    if request.POST:
        form = FormChallenge(request.POST)
        if form.is_valid():
            form.save()
            form = FormChallenge()
            pesan = "Data berhasil disimpan"

            context = {
                'form': form,
                'pesan': pesan,
            }
            return render(request, 'upload-challenge.html', context)
    else:
        form=FormChallenge()
        context={
            'form':form,
        }
    return render(request, 'upload-challenge.html', context)
# Create your views here.

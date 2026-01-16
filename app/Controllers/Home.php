<?php

namespace App\Controllers;

use CodeIgniter\HTTP\DownloadResponse;
use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{
    protected $data = [];
    public function index(): string
    {
        $this->data = [
            'title' => 'Home',
            'description' => 'Home',
            'keywords' => 'Home',
            'author' => 'Home',
            'canonical' => 'Home',
            'robots' => 'Home',
            'og:title' => 'Home',
        ];
        return render_page('home/index', $this->data);
    }

    public function whatsappCommunity(): string
    {
        $this->data = [
            'title' => 'WhatsApp Community',
            'description' => 'Join our WhatsApp Community',
            'keywords' => 'WhatsApp, Community',
            'author' => 'CHAZ Brook Besor University',
            'canonical' => '/whatsapp-community',
            'robots' => 'index, follow',
            'og:title' => 'WhatsApp Community',
        ];
        return render_page('home/whatsapp-community', $this->data);
    }

    public function contactUs(): string
    {
        $this->data = [
            'title' => 'Contact Us',
            'description' => 'Contact CHAZ Brook Besor University',
            'keywords' => 'Contact, University',
            'author' => 'CHAZ Brook Besor University',
            'canonical' => '/contact-us',
            'robots' => 'index, follow',
            'og:title' => 'Contact Us',
        ];
        return render_page('home/contactus', $this->data);
    }

    public function downloadApplicationForm()
    {
        $filePath = WRITEPATH . 'uploads/Brook_Besor_University_Undergraduate_Application_Form.docx';

        if (file_exists($filePath)) {
            return $this->response->download($filePath, null)->setFileName('CHAZ Brook Besor University Application Form.docx');
        } else {
            echo $filePath;
            // return redirect()->back()->with('error', 'The application form is currently unavailable for download.');
        }
    }
}

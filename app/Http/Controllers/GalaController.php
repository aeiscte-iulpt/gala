<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use App\Mail\SendMail;
use App\Mail\SendMailEspera;
use Illuminate\Support\Facades\Mail;

class GalaController extends Controller
{
    public function inscricao(Request $request){
        $this->validate($request,[
            'nome_mesa' => 'required',
            'nome1'   =>  'required',
            'email1'   =>  'required',
            'phone1'   =>  'required',
            'is_vegan1'    =>  'required',
            'aluno1'        =>  'required',
           
            'nome2'   =>  'required',
            'email2'   =>  'required',
            'phone2'   =>  'required',
            'is_vegan2'    =>  'required',
            'aluno2'        =>  'required',

            'nome3'   =>  'required',
            'email3'   =>  'required',
            'phone3'   =>  'required',
            'is_vegan3'    =>  'required',
            'aluno3'        =>  'required',

            'nome4'   =>  'required',
            'email4'   =>  'required',
            'phone4'   =>  'required',
            'is_vegan4'    =>  'required',
            'aluno4'        =>  'required',

            'nome5'   =>  'required',
            'email5'   =>  'required',
            'phone5'   =>  'required',
            'is_vegan5'    =>  'required',
            'aluno5'        =>  'required',

            'nome6'   =>  'required',
            'email6'   =>  'required',
            'phone6'   =>  'required',
            'is_vegan6'    =>  'required',
            'aluno6'        =>  'required',

            'nome7'   =>  'required',
            'email7'   =>  'required',
            'phone7'   =>  'required',
            'is_vegan7'    =>  'required',
            'aluno7'        =>  'required',

            'nome8'   =>  'required',
            'email8'   =>  'required',
            'phone8'   =>  'required',
            'is_vegan8'    =>  'required',
            'aluno8'        =>  'required',

            'nome9'   =>  'required',
            'email9'   =>  'required',
            'phone9'   =>  'required',
            'is_vegan9'    =>  'required',
            'aluno9'        =>  'required',

            'nome10'   =>  'required',
            'email10'   =>  'required',
            'phone10'   =>  'required',
            'is_vegan10'    =>  'required',
            'aluno10'        =>  'required',

        ]);

        $count6 = Inscritos::all()->count();
        $inscrito1 = Inscritos::where('aluno',$request->aluno1)->first();
        $inscrito2 = Inscritos::where('aluno',$request->aluno2)->first();
        $inscrito3 = Inscritos::where('aluno',$request->aluno3)->first();
        $inscrito4 = Inscritos::where('aluno',$request->aluno4)->first();
        $inscrito5 = Inscritos::where('aluno',$request->aluno5)->first();
        $inscrito6 = Inscritos::where('aluno',$request->aluno6)->first();
        $inscrito7 = Inscritos::where('aluno',$request->aluno7)->first();
        $inscrito8 = Inscritos::where('aluno',$request->aluno8)->first();
        $inscrito9 = Inscritos::where('aluno',$request->aluno9)->first();
        $inscrito10 = Inscritos::where('aluno',$request->aluno10)->first();
        $ipfind= Inscritos::where('ip',$request->ip())->first();

        if (!isset($ipfind)) {
           
        if ($count6 < 20) {
           
            if(!isset($inscrito1) && !isset($inscrito2) && !isset($inscrito3) && !isset($inscrito4) && !isset($inscrito5) && !isset($inscrito6) && !isset($inscrito7) && !isset($inscrito8) && !isset($inscrito9) && !isset($inscrito10)){
                $users1 = new Inscritos;
                $users1->nome_mesa   = $request->nome_mesa;
                $users1->ip = $request->ip();
                $users1->nome   = $request->nome1;
                $users1->email  = $request->email1;
                $users1->phone  = $request->phone1;
                $users1->aluno =$request->aluno1;
                $users1->is_vegan =$request->is_vegan1;
                $users1->intolerante =$request->intolerante1;
                $users1->status="REGISTADO";
                $users1->save();
    
                $users2 = new Inscritos;
                $users2->nome_mesa   = $request->nome_mesa;
                $users2->nome   = $request->nome2;
                $users2->email  = $request->email2;
                $users2->phone  = $request->phone2;
                $users2->aluno =$request->aluno2;
                $users2->is_vegan =$request->is_vegan2;
                $users2->intolerante =$request->intolerante2;
                $users2->status="REGISTADO";
                $users2->save();
        
                $users3 = new Inscritos;
                $users3->nome_mesa   = $request->nome_mesa;
                $users3->nome   = $request->nome3;
                $users3->email  = $request->email3;
                $users3->phone  = $request->phone3;
                $users3->aluno =$request->aluno3;
                $users3->is_vegan =$request->is_vegan3;
                $users3->intolerante =$request->intolerante3;
                $users3->status="REGISTADO";
                $users3->save();
         
                $users4 = new Inscritos;
                $users4->nome_mesa   = $request->nome_mesa;
                $users4->nome   = $request->nome4;
                $users4->email  = $request->email4;
                $users4->phone  = $request->phone4;
                $users4->aluno =$request->aluno4;
                $users4->is_vegan =$request->is_vegan4;
                $users4->intolerante =$request->intolerante4;
                $users4->status="REGISTADO";
                $users4->save();
           
                $users5 = new Inscritos;
                $users5->nome_mesa   = $request->nome_mesa;
                $users5->nome   = $request->nome5;
                $users5->email  = $request->email5;
                $users5->phone  = $request->phone5;
                $users5->aluno =$request->aluno5;
                $users5->is_vegan =$request->is_vegan5;
                $users5->intolerante =$request->intolerante5;
                $users5->status="REGISTADO";
                $users5->save();
          
                $users6 = new Inscritos;
                $users6->nome_mesa   = $request->nome_mesa;
                $users6->nome   = $request->nome6;
                $users6->email  = $request->email6;
                $users6->phone  = $request->phone6;
                $users6->aluno =$request->aluno6;
                $users6->is_vegan =$request->is_vegan6;
                $users6->intolerante =$request->intolerante6;
                $users6->status="REGISTADO";
                $users6->save();
          
                $users7 = new Inscritos;
                $users7->nome_mesa   = $request->nome_mesa;
                $users7->nome   = $request->nome7;
                $users7->email  = $request->email7;
                $users7->phone  = $request->phone7;
                $users7->aluno =$request->aluno7;
                $users7->is_vegan =$request->is_vegan7;
                $users7->intolerante =$request->intolerante7;
                $users7->status="REGISTADO";
                $users7->save();
        
                $users8 = new Inscritos;
                $users8->nome_mesa   = $request->nome_mesa;
                $users8->nome   = $request->nome8;
                $users8->email  = $request->email8;
                $users8->phone  = $request->phone8;
                $users8->aluno =$request->aluno8;
                $users8->is_vegan =$request->is_vegan8;
                $users8->intolerante =$request->intolerante8;
                $users8->status="REGISTADO";
                $users8->save();
          
                $users9 = new Inscritos;
                $users9->nome_mesa   = $request->nome_mesa;
                $users9->nome   = $request->nome9;
                $users9->email  = $request->email9;
                $users9->phone  = $request->phone9;
                $users9->aluno =$request->aluno9;
                $users9->is_vegan =$request->is_vegan9;
                $users9->intolerante =$request->intolerante9;
                $users9->status="REGISTADO";
                $users9->save();
    
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome10;
                $users->email  = $request->email10;
                $users->phone  = $request->phone10;
                $users->aluno =$request->aluno10;
                $users->is_vegan =$request->is_vegan10;
                $users->intolerante =$request->intolerante10;
                $users->status="REGISTADO";
                $users->save();

                $data = [
                    'nome_mesa' => $request->nome_mesa,
                    'nome1' => $request->nome1,
                    'nome2' => $request->nome2,
                    'nome3' => $request->nome3,
                    'nome4' => $request->nome4,
                    'nome5' => $request->nome5,
                    'nome6' => $request->nome6,
                    'nome7' => $request->nome7,
                    'nome8' => $request->nome8,
                    'nome9' => $request->nome9,
                    'nome10' => $request->nome10,
                ];
                Mail::to($request->email1)->send(new SendMail($data));
                Mail::to($request->email2)->send(new SendMail($data));
                Mail::to($request->email3)->send(new SendMail($data));
                Mail::to($request->email4)->send(new SendMail($data));
                Mail::to($request->email5)->send(new SendMail($data));
                Mail::to($request->email6)->send(new SendMail($data));
                Mail::to($request->email7)->send(new SendMail($data));
                Mail::to($request->email8)->send(new SendMail($data));
                Mail::to($request->email9)->send(new SendMail($data));
                Mail::to($request->email10)->send(new SendMail($data));
                return  back()->with('success', 'Obrigado! A tua inscrição foi registada! Verifica no teu email, a confirmação. Se não encontrares está no spam!');
            }else{
                return  back()->with('erro', 'OOOPPSS! Algum número de aluno que registou neste formulário já está inscrito! Por favor tente outra vez!');
            }

         
            
        }else{
            
            if(!isset($inscrito1) && !isset($inscrito2) && !isset($inscrito3) && !isset($inscrito4) && !isset($inscrito5) && !isset($inscrito6) && !isset($inscrito7) && !isset($inscrito8) && !isset($inscrito9) && !isset($inscrito10)){
                $users1 = new Inscritos;
                $users1->nome_mesa   = $request->nome_mesa;
                $users1->ip = $request->ip();
                $users1->nome   = $request->nome1;
                $users1->email  = $request->email1;
                $users1->phone  = $request->phone1;
                $users1->aluno =$request->aluno1;
                $users1->is_vegan =$request->is_vegan1;
                $users1->intolerante =$request->intolerante1;
                $users1->status="EM ESPERA";
                $users1->save();
    
                $users2 = new Inscritos;
                $users2->nome_mesa   = $request->nome_mesa;
                $users2->nome   = $request->nome2;
                $users2->email  = $request->email2;
                $users2->phone  = $request->phone2;
                $users2->aluno =$request->aluno2;
                $users2->is_vegan =$request->is_vegan2;
                $users2->intolerante =$request->intolerante2;
                $users2->status="EM ESPERA";
                $users2->save();
        
                $users3 = new Inscritos;
                $users3->nome_mesa   = $request->nome_mesa;
                $users3->nome   = $request->nome3;
                $users3->email  = $request->email3;
                $users3->phone  = $request->phone3;
                $users3->aluno =$request->aluno3;
                $users3->is_vegan =$request->is_vegan3;
                $users3->intolerante =$request->intolerante3;
                $users3->status="EM ESPERA";
                $users3->save();
         
                $users4 = new Inscritos;
                $users4->nome_mesa   = $request->nome_mesa;
                $users4->nome   = $request->nome4;
                $users4->email  = $request->email4;
                $users4->phone  = $request->phone4;
                $users4->aluno =$request->aluno4;
                $users4->is_vegan =$request->is_vegan4;
                $users4->intolerante =$request->intolerante4;
                $users4->status="EM ESPERA";
                $users4->save();
           
                $users5 = new Inscritos;
                $users5->nome_mesa   = $request->nome_mesa;
                $users5->nome   = $request->nome5;
                $users5->email  = $request->email5;
                $users5->phone  = $request->phone5;
                $users5->aluno =$request->aluno5;
                $users5->is_vegan =$request->is_vegan5;
                $users5->intolerante =$request->intolerante5;
                $users5->status="EM ESPERA";
                $users5->save();
          
                $users6 = new Inscritos;
                $users6->nome_mesa   = $request->nome_mesa;
                $users6->nome   = $request->nome6;
                $users6->email  = $request->email6;
                $users6->phone  = $request->phone6;
                $users6->aluno =$request->aluno6;
                $users6->is_vegan =$request->is_vegan6;
                $users6->intolerante =$request->intolerante6;
                $users6->status="EM ESPERA";
                $users6->save();
          
                $users7 = new Inscritos;
                $users7->nome_mesa   = $request->nome_mesa;
                $users7->nome   = $request->nome7;
                $users7->email  = $request->email7;
                $users7->phone  = $request->phone7;
                $users7->aluno =$request->aluno7;
                $users7->is_vegan =$request->is_vegan7;
                $users7->intolerante =$request->intolerante7;
                $users7->status="EM ESPERA";
                $users7->save();
        
                $users8 = new Inscritos;
                $users8->nome_mesa   = $request->nome_mesa;
                $users8->nome   = $request->nome8;
                $users8->email  = $request->email8;
                $users8->phone  = $request->phone8;
                $users8->aluno =$request->aluno8;
                $users8->is_vegan =$request->is_vegan8;
                $users8->intolerante =$request->intolerante8;
                $users8->status="EM ESPERA";
                $users8->save();
          
                $users9 = new Inscritos;
                $users9->nome_mesa   = $request->nome_mesa;
                $users9->nome   = $request->nome9;
                $users9->email  = $request->email9;
                $users9->phone  = $request->phone9;
                $users9->aluno =$request->aluno9;
                $users9->is_vegan =$request->is_vegan9;
                $users9->intolerante =$request->intolerante9;
                $users9->status="EM ESPERA";
                $users9->save();
    
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome10;
                $users->email  = $request->email10;
                $users->phone  = $request->phone10;
                $users->aluno =$request->aluno10;
                $users->is_vegan =$request->is_vegan10;
                $users->intolerante =$request->intolerante10;
                $users->status="EM ESPERA";
                $users->save();
                Mail::to($request->email1)->send(new SendMailEspera($data));
                Mail::to($request->email2)->send(new SendMailEspera($data));
                Mail::to($request->email3)->send(new SendMailEspera($data));
                Mail::to($request->email4)->send(new SendMailEspera($data));
                Mail::to($request->email5)->send(new SendMailEspera($data));
                Mail::to($request->email6)->send(new SendMailEspera($data));
                Mail::to($request->email7)->send(new SendMailEspera($data));
                Mail::to($request->email8)->send(new SendMailEspera($data));
                Mail::to($request->email9)->send(new SendMailEspera($data));
                Mail::to($request->email10)->send(new SendMailEspera($data));

                return  back()->with('success', 'Obrigado! A tua inscrição foi registada, mas vais ter que ficar na lista de Espera!');
            }else{
                return  back()->with('erro', 'OOOPPSS! Existe um aluno deste formulário já inscrito!');
            }

          
        }

        }else{
            return  back()->with('erro', 'OOOPPSS! Só dá para registares uma mesa por computador!');
        }

       
            
        

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class GalaController extends Controller
{
    public function inscricao(Request $request){
        $rules = [
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

        ];
        $mens=[   
            'nome_mesa.required'    => 'Nome da mesa é um campo obrigatório.',
            'nome1.required'    => 'Nome do responsável é um campo obrigatório.',
            'nome2.required'    => 'Nome do membro2 é um campo obrigatório.',
            'nome3.required'    => 'Nome do membro3 é um campo obrigatório.',
            'nome4.required'    => 'Nome do membro4 é um campo obrigatório.',
            'nome5.required'    => 'Nome do membro5 é um campo obrigatório.',
            'nome6.required'    => 'Nome do membro6 é um campo obrigatório.',
            'nome7.required'    => 'Nome do membro7 é um campo obrigatório.',
            'nome8.required'    => 'Nome do membro8 é um campo obrigatório.',
            'nome9.required'    => 'Nome do membro9 é um campo obrigatório.',
            'nome10.required'    => 'Nome do membro10 é um campo obrigatório.',

            'email1.required'    => 'Email do responsável é um campo obrigatório.',
            'email2.required'    => 'Email do membro2 é um campo obrigatório.',
            'email3.required'    => 'Email do membro3 é um campo obrigatório.',
            'email4.required'    => 'Email do membro4 é um campo obrigatório.',
            'email5.required'    => 'Email do membro5 é um campo obrigatório.',
            'email6.required'    => 'Email do membro6 é um campo obrigatório.',
            'email7.required'    => 'Email do membro7 é um campo obrigatório.',
            'email8.required'    => 'Email do membro8 é um campo obrigatório.',
            'email9.required'    => 'Email do membro9 é um campo obrigatório.',
            'email10.required'    => 'Email do membro10 é um campo obrigatório.',

            'phone1.required'    => 'Numero de telemóvel do responsável é um campo obrigatório.',
            'phone2.required'    => 'Numero de telemóvel do membro2 é um campo obrigatório.',
            'phone3.required'    => 'Numero de telemóvel do membro3 é um campo obrigatório.',
            'phone4.required'    => 'Numero de telemóvel do membro4 é um campo obrigatório.',
            'phone5.required'    => 'Numero de telemóvel do membro5 é um campo obrigatório.',
            'phone6.required'    => 'Numero de telemóvel do membro6 é um campo obrigatório.',
            'phone7.required'    => 'Numero de telemóvel do membro7 é um campo obrigatório.',
            'phone8.required'    => 'Numero de telemóvel do membro8 é um campo obrigatório.',
            'phone9.required'    => 'Numero de telemóvel do membro9 é um campo obrigatório.',
            'phone10.required'    => 'Numero de telemóvel do membro10 é um campo obrigatório.',

            'aluno1.required'    => 'Numero de aluno do responsável é um campo obrigatório.',
            'aluno2.required'    => 'Numero de aluno do membro2 é um campo obrigatório.',
            'aluno3.required'    => 'Numero de aluno do membro3 é um campo obrigatório.',
            'aluno4.required'    => 'Numero de aluno do membro4 é um campo obrigatório.',
            'aluno5.required'    => 'Numero de aluno do membro5 é um campo obrigatório.',
            'aluno6.required'    => 'Numero de aluno do membro6 é um campo obrigatório.',
            'aluno7.required'    => 'Numero de aluno do membro7 é um campo obrigatório.',
            'aluno8.required'    => 'Numero de aluno do membro8 é um campo obrigatório.',
            'aluno9.required'    => 'Numero de aluno do membro9 é um campo obrigatório.',
            'aluno10.required'    => 'Numero de aluno do membro10 é um campo obrigatório.',
            

        ];
		$validator = Validator::make($request->all(),$rules, $mens);
        if ($validator->fails()) {
			return redirect('credenciacao')
			->withInput()
			->withfailedrs($validator);
		}
		else{
        $count6 = Inscritos::all()->count();
        $inscrito1 = Inscritos::where('email',$request->email1)->first();
        $inscrito2 = Inscritos::where('email',$request->email2)->first();
        $inscrito3 = Inscritos::where('email',$request->email3)->first();
        $inscrito4 = Inscritos::where('email',$request->email4)->first();
        $inscrito5 = Inscritos::where('email',$request->email5)->first();
        $inscrito6 = Inscritos::where('email',$request->email6)->first();
        $inscrito7 = Inscritos::where('email',$request->email7)->first();
        $inscrito8 = Inscritos::where('email',$request->email8)->first();
        $inscrito9 = Inscritos::where('email',$request->email9)->first();
        $inscrito10 = Inscritos::where('email',$request->email10)->first();
        $ipfind= Inscritos::where('ip',$request->ip())->first();

        if (!isset($ipfind)) {

        if ($count6 < 301) {
        if(!isset($inscrito1)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->ip = $request->ip();
            $users->nome   = $request->nome1;
            $users->email  = $request->email1;
            $users->phone  = $request->phone1;
            $users->aluno =$request->aluno1;
            $users->is_vegan =$request->is_vegan1;
            $users->intolerante =$request->intolerante1;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email1.' já Inscrito!');
        }
        if(!isset($inscrito2)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome2;
            $users->email  = $request->email2;
            $users->phone  = $request->phone2;
            $users->aluno =$request->aluno2;
            $users->is_vegan =$request->is_vegan2;
            $users->intolerante =$request->intolerante2;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email2.' já Inscrito!');
        }
        if(!isset($inscrito3)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome3;
            $users->email  = $request->email3;
            $users->phone  = $request->phone3;
            $users->aluno =$request->aluno3;
            $users->is_vegan =$request->is_vegan3;
            $users->intolerante =$request->intolerante3;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email3.' já Inscrito!');
        }
        if(!isset($inscrito4)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome4;
            $users->email  = $request->email4;
            $users->phone  = $request->phone4;
            $users->aluno =$request->aluno4;
            $users->is_vegan =$request->is_vegan4;
            $users->intolerante =$request->intolerante4;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email4.' já Inscrito!');
        }
        if(!isset($inscrito5)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome5;
            $users->email  = $request->email5;
            $users->phone  = $request->phone5;
            $users->aluno =$request->aluno5;
            $users->is_vegan =$request->is_vegan5;
            $users->intolerante =$request->intolerante5;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email5.' já Inscrito!');
        }
        if(!isset($inscrito6)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome6;
            $users->email  = $request->email6;
            $users->phone  = $request->phone6;
            $users->aluno =$request->aluno6;
            $users->is_vegan =$request->is_vegan6;
            $users->intolerante =$request->intolerante6;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email6.' já Inscrito!');
        }
        if(!isset($inscrito7)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome7;
            $users->email  = $request->email7;
            $users->phone  = $request->phone7;
            $users->aluno =$request->aluno7;
            $users->is_vegan =$request->is_vegan7;
            $users->intolerante =$request->intolerante7;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email7.' já Inscrito!');
        }
        if(!isset($inscrito8)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome8;
            $users->email  = $request->email8;
            $users->phone  = $request->phone8;
            $users->aluno =$request->aluno8;
            $users->is_vegan =$request->is_vegan8;
            $users->intolerante =$request->intolerante8;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email8.' já Inscrito!');
        }
        if(!isset($inscrito9)){
            $users = new Inscritos;
            $users->nome_mesa   = $request->nome_mesa;
            $users->nome   = $request->nome9;
            $users->email  = $request->email9;
            $users->phone  = $request->phone9;
            $users->aluno =$request->aluno9;
            $users->is_vegan =$request->is_vegan9;
            $users->intolerante =$request->intolerante9;
            $users->status="REGISTADO";
            $users->save();
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email9.' já Inscrito!');
        }
        if(!isset($inscrito10)){
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
        }else{
            return  back()->with('failed', 'OOOPPSS! Email: '.$request->email10.' já Inscrito!');
        }

        Mail::to($request->email1)->send(new SendMail($request->nome1));
        return  back()->with('success', 'Obrigado! A tua inscrição foi registada!');
        }else{
            if(!isset($inscrito1)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->ip = $request->ip();
                $users->nome   = $request->nome1;
                $users->email  = $request->email1;
                $users->phone  = $request->phone1;
                $users->aluno =$request->aluno1;
                $users->is_vegan =$request->is_vegan1;
                $users->intolerante =$request->intolerante1;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email1.' já Inscrito!');
            }
            if(!isset($inscrito2)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome2;
                $users->email  = $request->email2;
                $users->phone  = $request->phone2;
                $users->aluno =$request->aluno2;
                $users->is_vegan =$request->is_vegan2;
                $users->intolerante =$request->intolerante2;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email2.' já Inscrito!');
            }
            if(!isset($inscrito3)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome3;
                $users->email  = $request->email3;
                $users->phone  = $request->phone3;
                $users->aluno =$request->aluno3;
                $users->is_vegan =$request->is_vegan3;
                $users->intolerante =$request->intolerante3;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email3.' já Inscrito!');
            }
            if(!isset($inscrito4)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome4;
                $users->email  = $request->email4;
                $users->phone  = $request->phone4;
                $users->aluno =$request->aluno4;
                $users->is_vegan =$request->is_vegan4;
                $users->intolerante =$request->intolerante4;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email4.' já Inscrito!');
            }
            if(!isset($inscrito5)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome5;
                $users->email  = $request->email5;
                $users->phone  = $request->phone5;
                $users->aluno =$request->aluno5;
                $users->is_vegan =$request->is_vegan5;
                $users->intolerante =$request->intolerante5;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email5.' já Inscrito!');
            }
            if(!isset($inscrito6)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome6;
                $users->email  = $request->email6;
                $users->phone  = $request->phone6;
                $users->aluno =$request->aluno6;
                $users->is_vegan =$request->is_vegan6;
                $users->intolerante =$request->intolerante6;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email6.' já Inscrito!');
            }
            if(!isset($inscrito7)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome7;
                $users->email  = $request->email7;
                $users->phone  = $request->phone7;
                $users->aluno =$request->aluno7;
                $users->is_vegan =$request->is_vegan7;
                $users->intolerante =$request->intolerante7;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email7.' já Inscrito!');
            }
            if(!isset($inscrito8)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome8;
                $users->email  = $request->email8;
                $users->phone  = $request->phone8;
                $users->aluno =$request->aluno8;
                $users->is_vegan =$request->is_vegan8;
                $users->intolerante =$request->intolerante8;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email8.' já Inscrito!');
            }
            if(!isset($inscrito9)){
                $users = new Inscritos;
                $users->nome_mesa   = $request->nome_mesa;
                $users->nome   = $request->nome9;
                $users->email  = $request->email9;
                $users->phone  = $request->phone9;
                $users->aluno =$request->aluno9;
                $users->is_vegan =$request->is_vegan9;
                $users->intolerante =$request->intolerante9;
                $users->status="EM ESPERA";
                $users->save();
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email9.' já Inscrito!');
            }
            if(!isset($inscrito10)){
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
            }else{
                return  back()->with('failed', 'OOOPPSS! Email: '.$request->email10.' já Inscrito!');
            }

            return  back()->with('success', 'Obrigado! A tua inscrição foi registada, mas vais ter que ficar na lista de Espera!');
        }

        }else{
            return  back()->with('failed', 'OOOPPSS! Só dá para registares uma mesa por computador!');
        }

       
            
        
    }
    }
}
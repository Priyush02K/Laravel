<form method="POST" action="{{ route('employees.update', $employee->id) }}" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 450px; margin: 40px auto; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08); background-color: #ffffff;">
  @csrf @method('PUT')
  <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px; font-size: 26px; font-weight: 600;">Edit Employee Details</h2>
  
  <div style="margin-bottom: 20px;">
    <label for="name" style="display: block; margin-bottom: 8px; color: #555; font-size: 15px;">Name:</label>
    <input name="name" id="name" value="{{ $employee->name }}" style="width: calc(100% - 28px); padding: 14px; border: 1px solid #bbb; border-radius: 6px; font-size: 17px; transition: border-color 0.3s ease, box-shadow 0.3s ease; box-sizing: border-box; outline: none;" 
           onfocus="this.style.borderColor='#5a9dd6'; this.style.boxShadow='0 0 10px rgba(90,157,214,.5)'" 
           onblur="this.style.borderColor='#bbb'; this.style.boxShadow='none'">
  </div>
  
  <div style="margin-bottom: 20px;">
    <label for="email" style="display: block; margin-bottom: 8px; color: #555; font-size: 15px;">Email:</label>
    <input name="email" id="email" value="{{ $employee->email }}" type="email" style="width: calc(100% - 28px); padding: 14px; border: 1px solid #bbb; border-radius: 6px; font-size: 17px; transition: border-color 0.3s ease, box-shadow 0.3s ease; box-sizing: border-box; outline: none;" 
           onfocus="this.style.borderColor='#5a9dd6'; this.style.boxShadow='0 0 10px rgba(90,157,214,.5)'" 
           onblur="this.style.borderColor='#bbb'; this.style.boxShadow='none'">
  </div>
  
  <div style="margin-bottom: 30px;">
    <label for="position" style="display: block; margin-bottom: 8px; color: #555; font-size: 15px;">Position:</label>
    <input name="position" id="position" value="{{ $employee->position }}" style="width: calc(100% - 28px); padding: 14px; border: 1px solid #bbb; border-radius: 6px; font-size: 17px; transition: border-color 0.3s ease, box-shadow 0.3s ease; box-sizing: border-box; outline: none;" 
           onfocus="this.style.borderColor='#5a9dd6'; this.style.boxShadow='0 0 10px rgba(90,157,214,.5)'" 
           onblur="this.style.borderColor='#bbb'; this.style.boxShadow='none'">
  </div>
  
  <button type="submit" style="background-color: #007bff; color: white; padding: 15px 25px; border: none; border-radius: 6px; cursor: pointer; font-size: 19px; width: 100%; font-weight: bold; transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;" 
          onmouseover="this.style.backgroundColor='#0056b3'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)'" 
          onmouseout="this.style.backgroundColor='#007bff'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">Update Employee</button>
</form>
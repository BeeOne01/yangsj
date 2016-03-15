package net.victor.code.network
{
	public class NetWorkError implements INetWorkError
	{
		/////////////////////////////////////////static /////////////////////////////////
		
		
		/////////////////////////////////////////vars /////////////////////////////////
		private var _pID:String = "";
		private var _errorType:*; 
		private var _des:String = "";
		public function NetWorkError(errorType:*, des:String="", pid:String="")
		{
			_pID = pid;
			_errorType = errorType;
		}
		
		public function get protocolID():String
		{
			return _pID;
		}
		
		public function get errorType():*
		{
			return _errorType;
		}
		public function get description():String
		{
			return _des;
		}
		public function dispose():void
		{
		}
		/////////////////////////////////////////public /////////////////////////////////
		
		
		
		/////////////////////////////////////////override ///////////////////////////////
		
		
		
		/////////////////////////////////////////protected ///////////////////////////////
		
		
		
		/////////////////////////////////////////private ////////////////////////////////
		
		
		
		/////////////////////////////////////////events//////////////////////////////////
	}
}